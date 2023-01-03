<?php

namespace App\Http\Controllers\Pkantin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\PesananMenu;
use App\Models\Stand;
use App\Models\Topup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CrudMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('Pkantin.crud-menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = Auth::guard('pegawaikantin')->user();
        $stands = Stand::where('p_kantin_id', '=', $pegawai->id)->get();
        return view('Pkantin.crud-menu.create', compact('stands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Menu::create([
            'stand_id' => $request->stand_id,
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'image' => $request->image
        ]);
        return redirect()->route('pkantin.dashboard.crud-menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('Pkantin.crud-menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $menu->update($request->only(
            'nama_menu',
            'harga',
            'image'
        ));

        return redirect()->route('pkantin.dashboard.crud-menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('pkantin.dashboard.crud-menu.index');
    }


    public function lihatMenu(Request $request, $id)
    {
        $stand = Stand::findOrFail($id);
        $menus = Menu::where('stand_id', '=', $id)->get();
        $user = Auth::guard('siswa')->user() ?? Auth::guard('guru')->user();
        if ($request->get('action') === 'rincian') {
            $menu_to_order = [];

            $total_harga = 0;
            foreach ($request->get('ids') as $k => $id) {
                $menu_to_order[] = [
                    'menu' => Menu::findOrFail($id),
                    'qty' => $request->get('qty')[$k] ?? 0
                ];
                $total_harga += $menu_to_order[$k]['menu']->harga * $menu_to_order[$k]['qty'];
            }
            return view('Kantin.Menu_Rincian', compact('menus', 'stand', 'user', 'menu_to_order', 'total_harga'));
        } else if ($request->get('action') === 'order') {
            $menus_to_order = json_decode($request->get('menus_to_order'), true);
            $total_harga = 0;

            foreach ($menus_to_order as $k => $menu) {
                $total_harga += $menu['menu']['harga'] * $menu['qty'];
            }

            if ($user->saldo < $total_harga) {
                return redirect()->route('Kantin/Menu', $stand->id)->with('error', 'Saldo anda tidak cukup');
            }

            $catatan = $request->get('catatan');

            if ($user) {
                DB::transaction(function () use ($menus_to_order, $total_harga, $user, $stand, $catatan) {
                    $user->update([
                        'saldo' => $user->saldo - $total_harga
                    ]);

                    $pesanan = Pesanan::create([
                        'siswa_id' => Auth::guard('siswa')->user() ? $user->id : null,
                        'guru_id' => Auth::guard('guru')->user() ? $user->id : null,
                        'stand_id' => $stand->id,
                        'total_harga' => $total_harga,
                        'status' => 'pending',
                        'catatan' => $catatan
                    ]);

                    foreach ($menus_to_order as $k => $menu) {
                        if ($menu['qty'] > 0) {
                            PesananMenu::create([
                                'pesanan_id' => $pesanan->id,
                                'menu_id' => $menu['menu']['id'],
                                'qty' => $menu['qty'],
                                'harga' => $menu['menu']['harga'] * $menu['qty'],
                            ]);
                        }
                    }
                });
            }

            return redirect()->route('Kantin/Stand', $stand->id);
        } else {
            return view('Kantin.Menu', compact('menus', 'stand', 'user'));
        }
    }

    public function ambilsaldo(Request $request)
    {
        $pegawai = Auth::guard('pegawaikantin')->user();
        if ($request->get('id')) {
            $stand = Stand::findOrFail($request->get('id'));

            DB::transaction(function () use ($stand, $pegawai) {
                Topup::create([
                    'user_id' => $pegawai->id,
                    'role' => 'pegawaikantin',
                    'status' => 'belum konfirmasi',
                    'amount' => $stand->saldo,
                    'type' => 'topup',
                ]);

                $stand->update([
                    'saldo' => 0
                ]);
            });

            return redirect()->route('pkantin.dashboard.ambilsaldo');
        } else {
            $stands = Stand::where('p_kantin_id', '=', $pegawai->id)->get();
            return view('Pkantin.ambilsaldo', compact('stands'));
        }
    }
}

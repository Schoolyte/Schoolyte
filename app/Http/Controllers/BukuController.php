<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PegawaiPerpus/CRUD-Perpus', [
            'data' => Buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar = $request->file('gambar')->getClientOriginalName();
        $nama = $request->input('namaBuku');
        $penulis = $request->input('penulis');
        $tahunTerbit = $request->input('tahunTerbit');
        $kategori = $request->input('kategori');
        $jumlahBuku = $request->input('jumlahBuku');
        $rincianBuku = $request->input('rincianBuku');

        $request->file('gambar')->storeAs('public/Buku', $gambar);

        $buku = new Buku();
        $buku->nama_buku = $nama;
        $buku->tahun_terbit = $tahunTerbit;
        $buku->nama_penulis = $penulis;
        $buku->rincian_buku = $rincianBuku;
        $buku->jumlah_buku = $jumlahBuku;
        $buku->image = $gambar;
        $buku->kategori_buku = $kategori;
        $buku->save();

        return redirect('/TambahBuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $manageBuku)
    {
        return view('PegawaiPerpus/FormUpdateBuku', [
            'buku' => $manageBuku,
            'data' => Buku::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $manageBuku)
    {
        $gambar = $request->file('gambar')->getClientOriginalName();
        $nama = $request->input('namaBuku');
        $penulis = $request->input('penulis');
        $tahunTerbit = $request->input('tahunTerbit');
        $kategori = $request->input('kategori');
        $jumlahBuku = $request->input('jumlahBuku');
        $rincianBuku = $request->input('rincianBuku');

        $request->file('gambar')->storeAs('public/Buku', $gambar);


        Buku::where('id', $manageBuku->id)
            ->update([
                'nama_buku' => $nama,
                'tahun_terbit' => $tahunTerbit,
                'nama_penulis' => $penulis,
                'rincian_buku' => $rincianBuku,
                'jumlah_buku' => $jumlahBuku,
                'image' => $gambar,
                'kategori_buku' => $kategori
            ]);


        return redirect('/CRUD-Perpus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $manageBuku)
    {
        Buku::destroy($manageBuku->id);
        return redirect()->back()->with('success', 'Data Berhasil Dihapus !');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;

class CrudMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapels = Mapel::all();
        return view('Admin.crud-mapel.index', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapels = Mapel::all();
        $gurus = Guru::all();
        return view('Admin.crud-mapel.create', compact('mapels', 'gurus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mapel::create([
            'guru_id' => $request->guru_id,
            'mapel' => $request->mapel,
        ]);

        return redirect()->route('admin.dashboard.crud-mapel.index');
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
        $mapel = Mapel::findOrFail($id);
        $gurus = Guru::all();
        return view('Admin.crud-mapel.edit', compact('mapel', 'gurus'));
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
        $mapel = Mapel::findOrFail($id);
        $mapel->update([
            'guru_id' => $request->guru_id,
            'mapel' => $request->mapel,
        ]);
        return redirect()->route('admin.dashboard.crud-mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = Mapel::findOrFail($id);
        $mapel->delete();
        return redirect()->route('admin.dashboard.crud-mapel.index');
    }
}

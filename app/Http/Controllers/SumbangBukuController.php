<?php

namespace App\Http\Controllers;

use App\Models\SumbangBuku;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSumbangBukuRequest;
use App\Http\Requests\UpdateSumbangBukuRequest;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SumbangBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Perpustakaan/FormSumbangBuku');
    }

    public function indexKonfirmasiSumbangBuku()
    {
        $idSiswa = Auth::guard('siswa')->user()->id;

        $bukuMenungguKonfirmasi = DB::table('sumbang_bukus')
            ->join('siswas', 'siswas.id', '=', 'sumbang_bukus.siswa_id')
            ->select('*', 'sumbang_bukus.image as gambar', 'sumbang_bukus.status as status_buku', 'sumbang_bukus.id as id_sumbang_buku')
            ->where('sumbang_bukus.status', "=", 'Menunggu Konfirmasi')
            ->where('sumbang_bukus.siswa_id', '=', $idSiswa)
            ->get();

        $bukuSelesai = DB::table('sumbang_bukus')
            ->join('siswas', 'siswas.id', '=', 'sumbang_bukus.siswa_id')
            ->select('*', 'sumbang_bukus.image as gambar', 'sumbang_bukus.status as status_buku', 'sumbang_bukus.id as id_sumbang_buku')
            ->where('sumbang_bukus.status', "!=", 'Menunggu Konfirmasi')
            ->where('sumbang_bukus.siswa_id', '=', $idSiswa)
            ->get();

        return view('Perpustakaan/KonfirmSumbang')
            ->with('bukuMenungguKonfirmasi', $bukuMenungguKonfirmasi)
            ->with('bukuSelesai', $bukuSelesai);
    }

    public function indexPegawaiSumbangBuku()
    {
        $bukuMenungguKonfirmasi = DB::table('sumbang_bukus')
            ->join('siswas', 'siswas.id', '=', 'sumbang_bukus.siswa_id')
            ->select('*', 'sumbang_bukus.image as gambar', 'sumbang_bukus.status as status_buku', 'sumbang_bukus.id as id_sumbang_buku')
            ->where('sumbang_bukus.status', "=", 'Menunggu Konfirmasi')
            ->get();

        $bukuSelesai = DB::table('sumbang_bukus')
            ->join('siswas', 'siswas.id', '=', 'sumbang_bukus.siswa_id')
            ->select('*', 'sumbang_bukus.image as gambar', 'sumbang_bukus.status as status_buku', 'sumbang_bukus.id as id_sumbang_buku')
            ->where('sumbang_bukus.status', "!=", 'Menunggu Konfirmasi')
            ->get();

        return view('PegawaiPerpus/SumbangBuku')
            ->with('bukuMenungguKonfirmasi', $bukuMenungguKonfirmasi)
            ->with('bukuSelesai', $bukuSelesai);
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
     * @param  \App\Http\Requests\StoreSumbangBukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idUser = Auth::guard('siswa')->user()->id;

        $gambar = $request->file('gambar')->getClientOriginalName();
        $nama = $request->input('namaBuku');
        $penulis = $request->input('penulis');
        $tahunTerbit = $request->input('tahunTerbit');
        $kategori = $request->input('kategori');
        $jumlahBuku = $request->input('jumlahBuku');
        $rincianBuku = $request->input('rincianBuku');

        $request->file('gambar')->storeAs('public/Sumbang-Buku', $gambar);

        $sumbangBuku = new SumbangBuku();
        $sumbangBuku->siswa_id = $idUser;
        $sumbangBuku->nama_buku = $nama;
        $sumbangBuku->tahun_terbit = $tahunTerbit;
        $sumbangBuku->nama_penulis = $penulis;
        $sumbangBuku->rincian_buku = $rincianBuku;
        $sumbangBuku->jumlah_buku = $jumlahBuku;
        $sumbangBuku->image = $gambar;
        $sumbangBuku->kategori_buku = $kategori;
        $sumbangBuku->status = "Menunggu Konfirmasi";
        $sumbangBuku->save();

        return redirect('/Perpustakaan');
    }

    public function setujuSumbang(Request $request)
    {
        $idSumbangBuku = $request->input('id_sumbang_buku');


        $dataBukuSumbangan = DB::table('sumbang_bukus')
            ->where('id', '=', $idSumbangBuku)
            ->get();


        foreach ($dataBukuSumbangan as $data) {

            $buku = new Buku();
            $buku->nama_buku = $data->nama_buku;
            $buku->tahun_terbit = $data->tahun_terbit;
            $buku->nama_penulis = $data->nama_penulis;
            $buku->rincian_buku = $data->rincian_buku;
            $buku->jumlah_buku = $data->jumlah_buku;
            $buku->image = $data->image;
            $buku->kategori_buku = $data->kategori_buku;
            $buku->save();
        }

        DB::table('sumbang_bukus')
            ->where('id', $idSumbangBuku)
            ->update([
                'status' => "Berhasil Disumbangkan",
            ]);



        return redirect('/SumbangBuku');
    }

    public function tolakSumbang(Request $request)
    {
        $idSumbangBuku = $request->input('id_sumbang_buku');
        DB::table('sumbang_bukus')
            ->where('id', $idSumbangBuku)
            ->update([
                'status' => "Gagal Disumbangkan",
            ]);

        return redirect('/SumbangBuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SumbangBuku  $sumbangBuku
     * @return \Illuminate\Http\Response
     */
    public function show(SumbangBuku $sumbangBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SumbangBuku  $sumbangBuku
     * @return \Illuminate\Http\Response
     */
    public function edit(SumbangBuku $sumbangBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSumbangBukuRequest  $request
     * @param  \App\Models\SumbangBuku  $sumbangBuku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSumbangBukuRequest $request, SumbangBuku $sumbangBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SumbangBuku  $sumbangBuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(SumbangBuku $sumbangBuku)
    {
        //
    }
}

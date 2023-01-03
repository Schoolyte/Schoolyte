<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idSiswa = Auth::guard('siswa')->user()->id;

        $bukuMenungguKonfirmasi = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->select('peminjaman_bukus.id', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Menunggu Konfirmasi')
            ->where('peminjaman_bukus.siswa_id', '=', $idSiswa)
            ->get();

        $bukuDipinjam = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->select('peminjaman_bukus.id', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Sedang Dipinjam')
            ->where('peminjaman_bukus.siswa_id', '=', $idSiswa)
            ->get();

        $bukuDikembalikan = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->select('peminjaman_bukus.id', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Sedang Dikembalikan')
            ->where('peminjaman_bukus.siswa_id', '=', $idSiswa)
            ->get();

        $bukuSelesai = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->select('peminjaman_bukus.id', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Selesai')
            ->where('peminjaman_bukus.siswa_id', '=', $idSiswa)
            ->get();
        $bukuTelat = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->select('peminjaman_bukus.id', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status', 'peminjaman_bukus.sanksi', 'peminjaman_bukus.telat')
            ->where('peminjaman_bukus.status', "=", 'Telat')
            ->where('peminjaman_bukus.siswa_id', '=', $idSiswa)
            ->get();
        $bukuHilang = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->select('peminjaman_bukus.id', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status', 'peminjaman_bukus.sanksi', 'peminjaman_bukus.telat')
            ->where('peminjaman_bukus.status', "=", 'Hilang')
            ->where('peminjaman_bukus.siswa_id', '=', $idSiswa)
            ->get();

        return view('Perpustakaan/Perpustakaan', [
            'buku' => Buku::all()
        ])->with('bukuMenungguKonfirmasi', $bukuMenungguKonfirmasi)
            ->with('bukuDipinjam', $bukuDipinjam)
            ->with('bukuSelesai', $bukuSelesai)
            ->with('bukuTelat', $bukuTelat)
            ->with('bukuHilang', $bukuHilang)
            ->with('bukuDikembalikan', $bukuDikembalikan);
    }

    public function pengembalianBuku(Request $request)
    {
        $idPeminjaman = $request->input('idPeminjaman');

        DB::table('peminjaman_bukus')
            ->where('id', '=', $idPeminjaman)
            ->update([
                'status' => 'Sedang Dikembalikan'
            ]);

        return redirect('/Perpustakaan');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $pinjam)
    {
        return view('Perpustakaan/FormPinjamBuku', [
            'buku' => $pinjam
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
    }
}

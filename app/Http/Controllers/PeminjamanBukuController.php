<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBuku;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeminjamanBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $idUser = Auth::guard('siswa')->user()->id;
        $idBuku = $request->input('idBuku');
        $tglPinjam = $request->input('tglPinjam');
        $tglKembali = $request->input('tglKembali');
        $jumlahBuku = $request->input('jumlah');

        $pinjamBuku = new PeminjamanBuku();
        $pinjamBuku->siswa_id = $idUser;
        $pinjamBuku->buku_id = $idBuku;
        $pinjamBuku->tgl_pinjam = $tglPinjam;
        $pinjamBuku->tgl_kembali = $tglKembali;
        $pinjamBuku->pengembalian = $tglKembali;
        $pinjamBuku->jumlah = $jumlahBuku;
        $pinjamBuku->status = "Menunggu Konfirmasi";
        $pinjamBuku->save();

        $jumlahBukuAwal = DB::table('bukus')
            ->where('id', $idBuku)
            ->value('jumlah_buku');

        DB::table('bukus')
            ->where('id', $idBuku)
            ->update([
                'jumlah_buku' => $jumlahBukuAwal - $jumlahBuku,
            ]);

        return redirect('/Perpustakaan');
    }

    public function indexPegawaiPerpus()
    {
        $bukuMenungguKonfirmasi = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->join('siswas', 'siswas.id', '=', 'peminjaman_bukus.siswa_id')
            ->select('peminjaman_bukus.id', 'siswas.nama', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Menunggu Konfirmasi')
            ->get();

        $bukuDipinjam = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->join('siswas', 'siswas.id', '=', 'peminjaman_bukus.siswa_id')
            ->select('peminjaman_bukus.id', 'siswas.nama', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Sedang Dipinjam')
            ->get();

        $bukuDikembalikan = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->join('siswas', 'siswas.id', '=', 'peminjaman_bukus.siswa_id')
            ->select('peminjaman_bukus.id', 'siswas.nama', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Sedang Dikembalikan')
            ->get();

        $bukuSelesai = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->join('siswas', 'siswas.id', '=', 'peminjaman_bukus.siswa_id')
            ->select('peminjaman_bukus.id', 'siswas.nama', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.pengembalian', 'peminjaman_bukus.status')
            ->where('peminjaman_bukus.status', "=", 'Selesai')
            ->get();

        $bukuTelat = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->join('siswas', 'siswas.id', '=', 'peminjaman_bukus.siswa_id')
            ->select('peminjaman_bukus.id', 'siswas.nama', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.pengembalian', 'peminjaman_bukus.status', 'peminjaman_bukus.telat', 'peminjaman_bukus.sanksi')
            ->where('peminjaman_bukus.status', "=", 'Telat')
            ->get();

        $bukuHilang = DB::table('peminjaman_bukus')
            ->join('bukus', 'bukus.id', '=', 'peminjaman_bukus.buku_id')
            ->join('siswas', 'siswas.id', '=', 'peminjaman_bukus.siswa_id')
            ->select('peminjaman_bukus.id', 'siswas.nama', 'bukus.nama_buku', 'bukus.image', 'peminjaman_bukus.tgl_pinjam', 'peminjaman_bukus.tgl_kembali', 'peminjaman_bukus.jumlah', 'peminjaman_bukus.pengembalian', 'peminjaman_bukus.status', 'peminjaman_bukus.telat', 'peminjaman_bukus.sanksi')
            ->where('peminjaman_bukus.status', "=", 'Hilang')
            ->get();

        $tglSekarang = DB::table('peminjaman_bukus')->select(DB::raw('CURRENT_DATE() as tgl_sekarang'))
            ->value('tgl_sekarang');


        return view('PegawaiPerpus/PeminjamanBuku')
            ->with('bukuMenungguKonfirmasi', $bukuMenungguKonfirmasi)
            ->with('bukuDipinjam', $bukuDipinjam)
            ->with('tglSekarang', $tglSekarang)
            ->with('bukuDikembalikan', $bukuDikembalikan)
            ->with('bukuTelat', $bukuTelat)
            ->with('bukuHilang', $bukuHilang)
            ->with('bukuSelesai', $bukuSelesai);
    }

    public function konfirmasiPeminjaman(Request $request)
    {
        $idPeminjaman = $request->input('idPeminjaman');

        DB::table('peminjaman_bukus')
            ->where('id', '=', $idPeminjaman)
            ->update([
                'status' => 'Sedang Dipinjam'
            ]);

        return redirect('/PeminjamanBuku');
    }

    public function pengembalianBuku(Request $request)
    {
        $idPeminjaman = $request->input('idPeminjaman');
        $pengembalian = $request->input('pengembalian');
        $telat = $request->input('telat');
        $status = $request->input('status');
        $sanksi = $request->input('sanksi');

        DB::table('peminjaman_bukus')
            ->where('id', '=', $idPeminjaman)
            ->update([
                'pengembalian' => $pengembalian,
                'telat' => $telat,
                'status' => $status,
                'sanksi' => $sanksi
            ]);

        $idBuku = DB::table('peminjaman_bukus')
            ->where('id', $idPeminjaman)
            ->value('buku_id');

        $jumlahBuku = DB::table('peminjaman_bukus')
            ->where('id', $idPeminjaman)
            ->value('jumlah');

        $jumlahBukuAwal = DB::table('bukus')
            ->where('id', $idBuku)
            ->value('jumlah_buku');

        DB::table('bukus')
            ->where('id', $idBuku)
            ->update([
                'jumlah_buku' => $jumlahBukuAwal + $jumlahBuku,
            ]);


        return redirect('/PeminjamanBuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeminjamanBuku  $peminjamanBuku
     * @return \Illuminate\Http\Response
     */
    public function show(PeminjamanBuku $peminjamanBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeminjamanBuku  $peminjamanBuku
     * @return \Illuminate\Http\Response
     */
    public function edit(PeminjamanBuku $peminjamanBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeminjamanBuku  $peminjamanBuku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeminjamanBuku $peminjamanBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeminjamanBuku  $peminjamanBuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeminjamanBuku $peminjamanBuku)
    {
        //
    }
}

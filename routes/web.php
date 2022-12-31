<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MutasiMasukController;
use App\Http\Controllers\MutasiKeluarController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\MutasiMasuk2Controller;
use App\Http\Controllers\Pendaftaran2Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahberitaController;
use App\Http\Controllers\JadwalKelasController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\OSISController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\LoginController;

// Siswa
Route::get('Paskibra', function () {
    return view('Ekstra/Paskibra');
})->name('Ekstra/Paskibra');

Route::get('Profile', function () {
    return view('Profile/Profile');
})->name('Profile/Profile');

Route::get('KartuDigital', function () {
    return view('Profile/KartuDigital');
})->name('Profile/KartuDigital');

Route::get('Stand', function () {
    return view('Kantin/Stand');
})->name('Kantin/Stand');

Route::get('DaftarFasilitas', function () {
    return view('Fasilitas/DaftarFasilitas');
})->name('Fasilitas/DaftarFasilitas');

Route::get('DaftarFasilitas', function () {
    return view('Fasilitas/DaftarFasilitas');
})->name('Fasilitas/DaftarFasilitas');
Route::get('Formpinjam', function () {
    return view('Fasilitas/Formpinjam');
})->name('Fasilitas/Formpinjam');
Route::get('Jadwalpinjaman', function () {
    return view('Fasilitas/Jadwalpinjaman');
})->name('Fasilitas/Jadwalpinjaman');

Route::get('Absensiswa', function () {
    return view('Absen/Absensiswa');
})->name('Absen/Absensiswa');

// Login
Route::get('/Login', function () {
    return view('Login');
})->name('Login');

Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

// DASHBOARD
// dashboard::admins
Route::group([
    'as' => 'admin.dashboard.',
    'prefix' => 'admin',
], function () {
    Route::resource('crud-guru', App\Http\Controllers\Admin\CrudGuruController::class);
    Route::resource('crud-kelas', App\Http\Controllers\Admin\CrudKelasController::class);
    Route::resource('crud-mapel', App\Http\Controllers\Admin\CrudMapelController::class);
    Route::resource('crud-siswa', App\Http\Controllers\Admin\CrudSiswaController::class);
    Route::resource('crud-jadwal', App\Http\Controllers\Admin\CrudJadwalController::class);
    Route::resource('crud-wali', App\Http\Controllers\Admin\CrudWaliSiswaController::class);
});
// dashboard::gurus
Route::group([
    'as' => 'guru.dashboard.',
    'prefix' => 'guru',
], function () {
    Route::resource('crud-nilai', App\Http\Controllers\Guru\CrudNilaiController::class);
});


//Controllers Done

//Beranda
Route::get('/', [BerandaController::class,'beranda'])->name('Beranda/Beranda');

  //Mutasi Masuk
  Route::get('Beranda/MutasiMasuk', [MutasiMasukController::class,'index'])->name('Beranda/MutasiMasuk');
  Route::get('Beranda/MutasiMasuk2', [MutasiMasuk2Controller::class,'index2'])->name('Beranda/MutasiMasuk2');
  Route::post('Beranda/MutasiMasuk/store', [MutasiMasukController::class,'store'])->name('Beranda/MutasiMasuk/store');

  //Pendaftaran
  Route::get('Beranda/Pendaftaran', [PendaftaranController::class,'pendaftaran'])->name('Beranda/Pendaftaran');
  Route::get('Beranda/Pendaftaran2', [Pendaftaran2Controller::class,'pendaftaran2'])->name('Beranda/Pendaftaran2');
  Route::post('Beranda/Pendaftaran/store', [PendaftaranController::class,'store'])->name('Beranda/Pendaftaran/store');

  Route::get('Berita/Hal_utama', [BerandaController::class,'berita'])->name('Berita/Hal_utama');

//Mutasi Keluar
Route::get('Mutasi/MutasiKeluar', [MutasiKeluarController::class,'mutasikeluar'])->name('Mutasi/MutasiKeluar');
Route::get('Mutasi/FormMutasi', [MutasiKeluarController::class,'formmutasikeluar'])->name('Mutasi/FormMutasi');
Route::Post('Mutasi/FormMutasi/store', [MutasiKeluarController::class,'store'])->name('Mutasi/FormMutasi/store');

//Dashboard
Route::get('Dashboard', [DashboardController::class,'dashboard'])->name('Dashboard');

Route::get('Strukturorganisasi', [DashboardController::class,'strukturorganisasi'])->name('Strukturorganisasi');

  //Berita
  Route::get('Berita/Beritasaya', [DashboardController::class,'beritasaya'])->name('Berita/Beritasaya');

  Route::get('Berita/Tambahberita', [DashboardController::class,'tambahberita'])->name('Berita/Tambahberita');
  Route::post('Berita/Tambahberita/store', [TambahberitaController::class,'store'])->name('Berita/Tambahberita/store');



//Navbar

  //Akademik
  Route::get('Jadwal/JadwalKelas', [JadwalKelasController::class,'jadwalkelas'])->name('Jadwal/JadwalKelas');

  Route::get('Rapor/RaporSiswa', [RaporController::class,'rapor'])->name('Rapor/RaporSiswa');
  Route::get('Rapor/RaporSiswa/RaporGanjil', [RaporController::class,'raporganjil'])->name('Rapor/RaporSiswa/RaporGanjil');
  Route::get('Rapor/RaporSiswa/RaporGenap', [RaporController::class,'raporgenap'])->name('Rapor/RaporSiswa/RaporGenap');

  Route::get('Penilaian/Penilaiansiswa1', [PenilaianController::class,'penilaian'])->name('Penilaian/Penilaiansiswa1');

  //Kegiatan Sekolah
  Route::get('OSIS/OSIS', [OSISController::class,'osis'])->name('OSIS/OSIS');
  Route::get('OSIS/Divisi_humas', [OSISController::class,'divisihumas'])->name('OSIS/Divisi_humas');

  Route::get('Ekstra/Ekskul', [EkskulController::class,'ekskul'])->name('Ekstra/Ekskul');



  Route::get('Newspage', function () {
    return view('Berita/Newspage');
});

Route::get('Rapordiskepe', function () {
    return view('rapor/Rapordiskepe');
})->name('rapor/Rapordiskepe');

Route::get('Tabelrapor', function () {
    return view('rapor/Tabelrapor');
})->name('rapor/Tabelrapor');

Route::get('Rapornonsiswa', function () {
    return view('rapor/Rapornonsiswa');
})->name('rapor/Rapornonsiswa');

Route::get('Rapornonsiswa2', function () {
    return view('rapor/Rapornonsiswa2');
})->name('rapor/Rapornonsiswa2');

// Route::get('Penilaiansiswa1', function () {
//     return view('Penilaian/Penilaiansiswa1');
// })->name('Penilaian/Penilaiansiswa1');

Route::get('Penilaianguru1', function () {
    return view('Penilaian/Penilaianguru1');
});
Route::get('Editnilai', function () {
    return view('Penilaian/Editnilai');
});
Route::get('Inputnilai', function () {
    return view('Penilaian/inputnilai');
});
Route::get('PenilaianGuruDinas', function () {
    return view('Penilaian/PenilaianGuruDinas');
})->name('Penilaian/PenilaianGuruDinas');

Route::get('PenilaianGuru', function () {
    return view('Penilaian/PenilaianGuru');
})->name('Penilaian/PenilaianGuru');

Route::get('Jadwalguru', function () {
    return view('Jadwal/Jadwalguru');
});
Route::get('Jadwal_dispen', function () {
    return view('Jadwal/Jadwal_dispen');
});
Route::get('Dispen_lihatjadwal', function () {
    return view('Jadwal/Dispen_lihatjadwal');
});
Route::get('Dispen_lihatjadwalguru', function () {
    return view('Jadwal/Dispen_lihatjadwalguru');
});
Route::get('View_Jadwal_Guru', function () {
    return view('Jadwal/View_Jadwal_Guru');
});
Route::get('Dispen_lihatjadwalguru2', function () {
    return view('Jadwal/Dispen_lihatjadwalguru2');
})->name('Jadwal/Dispen_lihatjadwalguru2');

Route::get('Menu', function () {
    return view('Kantin/Menu');
})->name('Kantin/Menu');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');


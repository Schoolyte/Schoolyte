<?php

use Illuminate\Support\Facades\Route;


Route::get('Dashboard', function () {
    return view('Dashboard');
})->name('Dashboard');

Route::get('Pendaftaran', function () {
    return view('Beranda/Pendaftaran');
});
Route::get('Feedback', function () {
    return view('Beranda/Feedback');
});Route::get('Feedback2', function () {
    return view('Beranda/Feedback2');
});
Route::get('Mutasimasuk', function () {
    return view('Beranda/Mutasimasuk');
});
Route::get('Hal_utama', function () {
    return view('Berita/Hal_utama');
});
Route::get('Regisberita', function () {
    return view('Berita/Regisberita');
})->name('Berita/Regisberita');
Route::get('Newspage', function () {
    return view('Berita/Newspage');
});
Route::get('Beritasaya', function () {
    return view('Berita/Beritasaya');
})->name('Berita/Beritasaya');
Route::get('Lihatrapor', function () {
    return view('rapor/Lihatrapor');
})->name('rapor/Lihatrapor');

Route::get('Munculrapor', function () {
    return view('rapor/Munculrapor');
});
Route::get('Penilaiansiswa1', function () {
    return view('Penilaian/Penilaiansiswa1');
})->name('Penilaian/Penilaiansiswa1');

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
Route::get('Jadwalsiswa', function () {
    return view('Jadwal/Jadwalsiswa');
})->name('Jadwal/Jadwalsiswa');
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
Route::get('Page_ekskul', function () {
    return view('Ekstra/Page_ekskul');
})->name('Ekstra/Page_ekskul');
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

Route::get('Halawal_osis', function () {
    return view('OSIS/Halawal_osis');
})->name('OSIS/Halawal_osis');
Route::get('Devisi_humas', function () {
    return view('OSIS/Devisi_humas');
})->name('OSIS/Devisi_humas');
Route::get('DaftarFasilitas', function () {
    return view('Fasilitas/DaftarFasilitas');
})->name('Fasilitas/DaftarFasilitas');








Route::get('/', function () {
    return view('Beranda/Beranda');
})->name('Beranda/Beranda');

Route::get('/Login', function () {
    return view('Login');
})->name('Login');

Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');




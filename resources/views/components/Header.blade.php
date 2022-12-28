<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penilaian Pembelajaran | Schoolyte</title>
    <link rel="stylesheet" href={{ asset('Style/Navbar.css') }}>

</head>
@section('Navbar')
<header>
    <nav>
        <hr>
    <div class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src={{ asset('assets/logo.png') }} alt="Bootstrap" width="151" height="37"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" width="50" height="100"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="menu">
          <li><a href={{ route('Dashboard') }} class="active">Dashboard</a></li>
          <li><a href="#"> Akademik </a>
            <ul class="submenu">
              <li><a href={{route('Jadwal/JadwalKelas')}}>Jadwal Kelas</a> <hr class="break"></li>
              <li><a href="#">Absensi Kehadiran</a>
                <hr>
              <li><a href={{ route('Penilaian/Penilaiansiswa1')}}>Penilaian Pembelajaran</a> <hr class="break"></li>


              <li><a href={{ route('Rapor/RaporSiswa') }}>Rapor</a> <hr class="break"></li>
              <li><a href={{ route('Mutasi/MutasiKeluar') }}>Mutasi</a> </li>
            </ul>
          </li>
          <li><a href="#">Peminjaman</a>
              <ul class="submenu">
                <li><a href="#">Perpustakaan</a> <hr class="break"></li>
                <li><a href="#">Fasilitas</a>
                    <ul class="submenu2">
                      <li><a href={{ route('Fasilitas/DaftarFasilitas') }}>Daftar Fasilitas</a> <hr class="break"></li>
                      <li><a href=>Peminjaman Fasilitas</a></li>
                    </ul>
                </li>
              </ul>

          </li>
          <li><a href="#">Kegiatan Sekolah</a>
            <ul class="submenu">
              <li><a href="{{ route('OSIS/OSIS')}}">OSIS</a> <hr class="break"></li>
              <li><a href="{{ route('Ekstra/Ekskul')}}">Ekstrakulikuler</a></li>
            </ul>
          </li>
          <li><a href="#">Pembelian</a>
              <ul class="submenu">
                <li><a href="#">Koperasi</a> <hr class="break"></li>
                <li><a href={{ route('Kantin/Stand') }}>Kantin</a></li>
              </ul>
          </li>
          <li><a href="#">Administrasi</a>
          <ul class="submenu">
            <li><a href="#">Keuangan</a><hr class="break"></li>
            <li><a href="#">Pembayaran SPP</a><hr class="break"></li>
            <li><a href="#">Pembayaran Buku</a><hr class="break"></li>
            <li><a href="#">Pembayaran Seragam</a></li>
          </ul>
          </li>
          <li class="Notif"><a href="#">
          <img src={{ asset("assets/Notification.svg") }} alt="Notif" width="35" height="35"/>
          </a>
              <ul class="submenu">
             <div class="isinotif">

              <li><a>Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</a> <hr class="break"></li>
             <li><a>Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</a></li>
             </div>
              </ul>
          </li>

          <li class="Profil"><a href="#">
          <img src={{ asset("assets/icon.svg") }} alt="Profil" width="35" height="35"/>
          </a>
              <ul class="submenu" bg="dark">
                <li><a href={{ route('Profile/Profile') }}>Profile Saya</a> <hr class="break" ></li>
                <li><a href={{ route('Beranda/Beranda') }}>Logout</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </nav>
</header>
<br>
<hr>
</html>
@endsection

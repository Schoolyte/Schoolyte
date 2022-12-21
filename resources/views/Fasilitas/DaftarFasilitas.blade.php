<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Fasilitas</title>
    <link rel="stylesheet" href="Style/DaftarFasilitas.css">

</head>
<body>
  <header>
  @include('components.Header')
  @yield('Navbar')
  </header>
  <div class="Main">
    <div class="page-ekskul">
      <div class="tittle-page">
        <span>Daftar Fasilitas</span>
        <ul class="breadcrumb">
          <li><a href="#">Peminjaman</a></li>
          <li><a href="#">Fasilitas</a></li>
        <li>Daftar Fasilitas</li>
        </ul>
    </div>
    <div class="intro">
      <img src="/assets/Main-Kantin.png" alt="">
      <span>Fasilitas</span>
      <span>Dapatkan Informasi tentang fasilitas sekolah yang tersedia</span>
    </div>

    </div class="Info_Fasilitas">

    <div class="subtitle">
        <span>Jam Pelayanan</span>
        <span>Koleksi</span>
    </div>

        <div class="desc">
            <span>Setiap hari selama jam belajar mengajar berlangsung, weekend & tanggal merah tutup</span>
            <span>Terdapat fasilitas seperti LCD, Ruang Aula, Lapangan Basket, Lapangan Sepakbola, Lapangan Bulu Tangkis, Lapangan Voli, Ruang Band, Ruang Banjari, Laboratorium</span>
        </div>

          <div class="JadwalPinjam-base">

                    <span class="span1">Jadwal Peminjaman Fasilitas</span>
                    <span class="span2">Anda dapat melihat jadwal peminjaman fasilitas yang telah dipinjam</span>
                <form action= {{ route('Profile/KartuDigital') }}>
                    <div class="button">
                    <input class="button-text" type="submit" value="Lihat" />
                    </div>
                </div>
                </form>


          </div>





          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

</body>

<footer>
  @include('components.Footer')
</footer>

</html>



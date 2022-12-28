<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("Style/Beritasaya.css") }}>
    <title>Berita Saya | Schoolyte</title>

</head>
<body>
    @include('components.Header ')
@yield('Navbar')
    <div class="page-beritasaya" style="min-height: 200vh;">
    <div class="tittle-page">
            <span>Berita Saya</span>
            <ul class="breadcrumb">
              <li><a href="#">Dashboard</a></li>
              <li>Berita Saya</li>
            </ul>
        </div>
        <div class="warning">
            <span>Pantau terus berita yang telah anda tambahkan </span>
            <span>• Nilai terdiri dari nilai tugas hingga nilai ujian</span>
        </div>
        <div class="konfirmasi">
            <div class="card1">
                <img src="/assets/mpls.png" alt="" class="img-berita">
                <div class="judul-berita">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</div>
                <div class="menunggu-konfirm">Menunggu Konfirmasi</div>
            </div>
            <div class="card2">
                <img src="/assets/mpls.png" alt="" class="img-berita">
                <div class="judul-berita">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</div>
                <div class="menunggu-konfirm">Menunggu Konfirmasi</div>
            </div>
            <div class="card3">
                <img src="/assets/mpls.png" alt="" class="img-berita">
                <div class="judul-berita">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</div>
                <div class="menunggu-konfirm">Menunggu Konfirmasi</div>
            </div>
        </div>
    </div>
    @include('components.Footer')
</body>
</html>

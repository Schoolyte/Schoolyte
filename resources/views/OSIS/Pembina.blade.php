<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/pembinaosis.css">
    <title>Document</title>
</head>
@yield('Navbar')
<body>
    <div class="page-pembina" style="min-height: 300vh;">
        <div class="tittle-page">
            <span>OSIS (Organisasi Siswa Intra Sekolah)</span>
            <ul class="breadcrumb">
              <li><a href="#">Kegiatan Sekolah</a></li>
              <li>OSIS</li>
            </ul>
        </div>
        <div class="intro">
            <img src="/assets/img-osis.png" alt="">
            <span>OSIS</span>
            <span>OSIS dapat diikuti oleh siswa kelas X dan XI</span>
        </div>
        <h1>Selamat Datang Pembina OSIS !!</h1>
        <h5>Anda dapat mengakses hal yang berkaitan dengan aktivitas OSIS</h5>
        <a href="">
            <div class="devisi">
                <img src="/assets/Tasklist.png" alt="" class="icon231">
                <span class="text">Devisi</span>
            </div>
        </a>
        <a href="">
            <div class="struktur">
                <img src="/assets/Hierarchy.png" alt="" class="icon231">
                <span class="text">Struktur Organisasi</span>
            </div>
        </a>
        <a href="">
            <div class="dokumentasi">
                <img src="/assets/dokumentasi.png" alt="" class="icon231">
                <span class="text">Dokumentasi</span>
            </div>
        </a>
        <a href="">
            <div class="konfirmasi">
                <img src="/assets/Task.png" alt="" class="icon231">
                <span class="text">Konfirmasi Pendaftaran</span>
            </div>
        </a>
        <a href="">
            <div class="dokumen">
                <img src="/assets/Documents.png" alt="" class="icon231">
                <span class="text">Dokumen Pendukung</span>
            </div>
        </a>
    </div>
</body>
</html>
@include('components.Footer')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/TambahBuku.css">
    <title>Tambah Buku | Schoolyte</title>
</head>
@include('components.Header ')
@yield('Navbar')

<body>
    <div class="main" style="min-height: 300vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
                <li><a href="#">Peminjaman</a></li>
                <li>Perpustakaan</li>
            </ul>
        </div>
        <h1>Tambah Buku </h1>
        <a href={{ route('PegawaiPerpus/CRUD-Perpus') }}>
            <div class="link1">
                <img src="/assets/Storytelling.png" alt="" class="icon">
                <span class="j1">Lihat Buku</span>
            </div>
        </a>
        <a href={{ route('PegawaiPerpus/FormTambahBuku') }}>
            <div class="link2">
                <img src="/assets/Storytelling.png" alt="" class="icon">
                <span class="j1">Tambah</span>
            </div>
        </a>
        <a href={{ route('PegawaiPerpus/SumbangBuku') }}>
            <div class="link3">
                <img src="/assets/jarut.png" alt="" class="icon">
                <span class="j1">Sumbang Buku</span>
            </div>
        </a>
    </div>
</body>

</html>
@include('components.Footer')

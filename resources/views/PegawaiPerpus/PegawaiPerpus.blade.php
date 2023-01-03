<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="Style/PegawaiPerpus.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
@include('components.Header ')
@yield('Navbar')

<body>
    <div class="fasilitas" style="min-height: 175vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
                <li><a href="#">Peminjaman</a></li>
                <li>Perpustakaan</li>
            </ul>
        </div>
        <div class="intro">
            <img src="/assets/lapangan.png" alt="">
            <span>Perpustakaan</span>
            <span>Cari dan Pinjam berbagai buku yang kalian inginkan</span>
        </div>
    </div>
    <div class="container mb-5">
        <h1>Selamat Datang Pegawai Perpustakaan !!</h1>
        <span class="text">Anda dapat mengakses hal yang berkaitan dengan aktivitas perpustakaan</span>
        <div class="row d-flex justify-content-between text-center">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        <a class="nav-link" href={{ route('PegawaiPerpus/TambahBuku') }}>
                            <div class="link1">
                                <img src="/assets/Storytelling.png" alt="" class="icon">
                                <h4 class="j1">Tambah Buku</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        <a class="nav-link" href={{ route('PegawaiPerpus/PeminjamanBuku') }}>
                            <div class="link2">
                                <img src="/assets/pinjambuku.png" alt="" class="icon">
                                <h4 class="j1">Peminjaman Buku</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        <a class="nav-link" href="#">
                            <div class="link3">
                                <img src="/assets/Reading.png" alt="" class="icon">
                                <h4 class="j1">Daftar Kunjungan</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

@include('components.Footer')

</html>

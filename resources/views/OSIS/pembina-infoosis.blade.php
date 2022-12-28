<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/pembina-info.css">
    <title>Document</title>
</head>
@yield('Navbar')
<body>
    <div class="page-pembina" style="min-height: 180vh;">
        <div class="tittle-page">
            <span>OSIS (Organisasi Siswa Intra Sekolah)</span>
            <ul class="breadcrumb">
              <li><a href="#">Kegiatan Sekolah</a></li>
              <li>OSIS</li>
            </ul>
        </div>
        <h1>Divisi OSIS</h1>
        <a href="">
            <div class="bph">
                <img src="/assets/Profile.png" alt="" class="icon21">
                <h2>BPH</h2>
            </div>
        </a>
        <a href="">
            <div class="minat-bakat">
                <img src="/assets/Profile.png" alt="" class="icon21">
                <h2>Divisi Minat & Bakat</h2>
            </div>
        </a>
        <a href="">
            <div class="humas">
                <img src="/assets/Profile.png" alt="" class="icon21">
                <h2>Divisi Humas</h2>
            </div>
        </a>
        <a href="">
            <div class="humas2">
                <img src="/assets/Profile.png" alt="" class="icon21">
                <h2>Divisi Humas</h2>
            </div>
        </a>
        <a href="">
            <div class="bph2">
                <img src="/assets/Profile.png" alt="" class="icon21">
                <h2>BPH</h2>
            </div>
        </a>
        <a href="">
            <div class="kesehatan">
                <img src="/assets/Profile.png" alt="" class="icon21">
                <h2>Devisi Kesehatan</h2>
            </div>
        </a>
        
    </div>
</body>
</html>
@include('components.Footer')
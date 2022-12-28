<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("Style/Page_ekskul.css") }}>
    <title>Ekstrakulikuler | Schoolyte</title>
</head>
<body>
    @include('components.Header ')
@yield('Navbar')
    <div class="page-ekskul" style="min-height: 320vh;">
        <div class="tittle-page">
            <span>Ekstrakulikuler</span>
            <ul class="breadcrumb">
              <li><a href="#">Kegiatan Sekolah</a></li>
              <li>Ekstrakulikuler</li>
            </ul>
        </div>
        <div class="intro">
            <img src="/assets/Bg-ekskul.png" alt="">
            <span>EKSTRAKULIKULER</span>
            <span>Ekstrakulikuler ini dapat diikuti oleh siswa kelas X dan XI</span>
        </div>
        <div class="hiasan">
            <img src="/assets/Soccer Player.png" alt=""><span>Ekskul Saya</span>
        </div>

        <div class="kategori">
            <span>Kategori Ekstrakurikuler</span>
            <div class="paskib">
                <img src="/assets/mpls.png" alt="">
                <span>PASKIBRA</span>
                <a href="/Paskibra"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="pencak-silat">
                <img src="/assets/mpls.png" alt="">
                <span>PENCAK SILAT</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="pramuka">
                <img src="/assets/mpls.png" alt="">
                <span>PRAMUKA</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="basket">
                <img src="/assets/mpls.png" alt="">
                <span>BASKET</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="badminton">
                <img src="/assets/mpls.png" alt="">
                <span>BADMINTON</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="renang">
                <img src="/assets/mpls.png" alt="">
                <span>RENANG</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="pmr">
                <img src="/assets/mpls.png" alt="">
                <span>PMR</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="futsal">
                <img src="/assets/mpls.png" alt="">
                <span>FUTSAL</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
            <div class="musik">
                <img src="/assets/mpls.png" alt="">
                <span>MUSIK</span>
                <a href="#"><button type="" class="btn-ekskul">Selengkapnya</button></a>
            </div>
        </div>
    </div>
</body>
</html>
@include('components.Footer')

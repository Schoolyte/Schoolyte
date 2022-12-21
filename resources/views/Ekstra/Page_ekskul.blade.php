<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Page_ekskul.css">
    <title>Document</title>
</head>
<body>
@yield('Navbar')
    <div class="page-ekskul">
    <div class="tittle-page">
            <span>Ekstrakurikuler</span>
            <ul class="breadcrumb">
              <li><a href="#">Kegiatan Sekolah</a></li>
              <li>Ekstrakurikuler</li>
            </ul>
        </div>
        <div class="intro">
            <img src="/assets/Bg-ekskul.png" alt="">
            <span>EKSTRAKURIKULER</span>
            <span>Ekstrakurikuler ini dapat diikuti oleh siswa kelas X dan XI</span>
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
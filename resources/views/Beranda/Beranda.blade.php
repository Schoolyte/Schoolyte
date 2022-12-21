<!DOCTYPE html>
<html lang="en">

@include('components.HeaderB')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beranda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Glory:wght@800&display=swap');">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Main CSS-->
        <link href="Style/BodyB.css" rel="stylesheet">
    </head>
    
    <body>
    @yield('content')
            <div class="introB">
                <div class="i-leftB">
                    <span>Schoolyte</span>
                    <span>Dapatkan informasi dan akses <br/> berbagai kemudahan dengan <br/> Schoolyte</span>
                    <a href="#"><button type="button"  class="btn-Login">Login</button></a>
                </div>
                <div class="i-rightB">
                    <img src="assets/loginnn_1.png" class="img-brnd" />
                </div>
                <div class="news"> 
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                        <a href="#">
                            <img src="/assets/MPLS 2.png" alt="Los Angeles" style="width:100%;">
                            <span class="judul">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</span>
                            <h1>Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Baru dan Para Dewan Guru Serta Pengurus OSIS SMA Negeri Ngoro Menggelar Apel .........
                            </h1>

                        </a>
                        </div>
                
                        <div class="item">
                            <a href="#"> <img src="/assets/MPLS 2.png" alt="Los Angeles" style="width:100%;"></a>
                            <span class="judul">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</span>
                            <h1>Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Baru dan Para Dewan Guru Serta Pengurus OSIS SMA Negeri Ngoro Menggelar Apel .........
                            </h1>
                        </div>
                    
                        <div class="item">
                            <a href="#"> <img src="/assets/MPLS 2.png" alt="Los Angeles" style="width:100%;"></a>
                            <span class="judul">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</span>
                            <h1>Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Baru dan Para Dewan Guru Serta Pengurus OSIS SMA Negeri Ngoro Menggelar Apel .........
                            </h1>
                        </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                <div class="penerimaan">
                    <span>Penerimaan Siswa Baru</span>
                    <span>Mari bergabung bersama kami 
                        dan menjadi peserta didik yang 
                        Beriman, Cerdas, Terampil, Mandiri, dan Berwawasan Global</span>
                    <button type="" class="btn-daftar">Daftar Sekarang</button>    
                </div>
                <div class="mutasi-masuk">
                    <span>Mutasi Siswa Masuk</span>
                    <span>Mutasi masuk diperuntukkan 
                        bagi siswa pindahan yang akan masuk.
                        Lebih lanjutnya silahkan melengkapi formulir berikut</span>
                    <button type="" class="btn-mutasi">Mutasi Masuk</button>
                </div>
            </div>
    </body>
</html>
@include('components.Footer')

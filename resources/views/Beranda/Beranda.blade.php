<!DOCTYPE html>
<html lang="en">
@include('components.HeaderB')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beranda | Schoolyte</title>
        <link href="https://fonts.googleapis.com/css2?family=Glory:wght@800&display=swap');">
        <link rel="stylesheet" href="Style/BodyB.css">
    </head>
    <body>
    @yield('content')
            <div class="introB" style="min-height: 300vh;">
                <div class="i-leftB">
                    <span>Schoolyte</span>
                    <span>Dapatkan informasi dan akses <br/> berbagai kemudahan dengan <br/> Schoolyte</span>
                </div>
                <a href= {{ route('Login') }}><button type="button" class="btn-Login">Login</button></a>
                <div class="i-rightB">
                    <img src="assets/loginnn_1.png" class="img-brnd" />
                </div>
                <div class="news">
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <a href={{ Route('Berita/Hal_utama') }}  style="text-decoration: none;">
                                <img src="/assets/MPLS 2.png" style="width:100%">
                                <div class="judul">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</div>
                                <div class="text">Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Baru dan Para Dewan Guru Serta Pengurus OSIS SMA Negeri Ngoro Menggelar Apel .........
                                </div>
                            </a>
                        </div>

                        <div class="mySlides fade">
                            <a href={{ Route('Berita/Hal_utama') }} style="text-decoration: none;">
                                <img src="/assets/MPLS 2.png" style="width:100%">
                                <div class="judul">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</div>
                                <div class="text">Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Baru dan Para Dewan Guru Serta Pengurus OSIS SMA Negeri Ngoro Menggelar Apel .........
                                </div>
                            </a>
                        </div>

                        <div class="mySlides fade">
                            <a href={{ Route('Berita/Hal_utama') }}  style="text-decoration: none;">
                                <img src="/assets/MPLS 2.png" style="width:100%">
                                <div class="judul">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</div>
                                <div class="text">Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Baru dan Para Dewan Guru Serta Pengurus OSIS SMA Negeri Ngoro Menggelar Apel .........
                                </div>
                            </a>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                    </div>
                    <div >
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <div class="penerimaan">
                    <span>Penerimaan Siswa Baru</span>
                    <span>Mari bergabung bersama kami
                        dan menjadi peserta didik yang
                        Beriman, Cerdas, Terampil, Mandiri, dan Berwawasan Global</span>
                        <a href={{ route('Beranda/Pendaftaran') }} ><button type="button" class="btn-daftar">Daftar Sekarang</button></a>

                </div>
                <div class="mutasi-masuk">
                    <span>Mutasi Siswa Masuk</span>
                    <span>Mutasi masuk diperuntukkan
                        bagi siswa pindahan yang akan masuk.
                        Lebih lanjutnya silahkan melengkapi formulir berikut</span>
                        <a href={{ route('Beranda/MutasiMasuk') }} ><button type="button" class="btn-mutasi">Mutasi Masuk</button></a>
                </div>
            </div>
            <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>
    </body>
</html>
@include('components.Footer')

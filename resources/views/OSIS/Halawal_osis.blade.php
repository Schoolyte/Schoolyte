<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/Halawal_osis.css">
    <title>Document</title>
</head>
<body>
@yield('Navbar')
    <div class="beranda-osis">
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
        <div class="center">
            <span>VISI</span>
            <span>Dapatkan informasi dan akses berbagai kemudahan dengan Schoolyte</span>
            <span>MISI</span>
            <span>Menjadi perusahaan yang fokus pada tujuan pondasi yang mampu berdaya saing global dan mendapat apresiasi secara internasional</span>
            <span>Berperan meningkatkan kualitas hidup pengguna lewat layanan digital</span>
            <span>Menyediakan pelayanan dalam sistem integrasi dengan sederhana tetapi tetap konsisten.</span>
        </div>
        <div class="struktur-organisasi">
            <h1>STRUKTUR ORGANISASI</h1>
            <div class="navtabs">
        <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" id="home-tab" type="button" 
                data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">Struktur OSIS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" id="profile-tab" type="button" 
                data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">Devisi</button>
            </li>
            
        </ul>
        <div class="tab-content">
            <div class="tab-pane show active" role="tabpanel" id="home" aria-labelledby="home-tab">
              <div class="dropdown">
                <button class="dropbtn1">
                  <span style="padding-right: 510px; font-family: 'Lato',san-serif; text-align:left; font-style: normal; font-weight: 700; font-size: 30px;line-height: 36px;">Badan Pengurus Harian (BPH)</span><br/>
                  <span style="padding-right: 390px; font-family: 'Lato',san-serif; text-align:left; font-style: normal; font-weight: 300; font-size: 20px;line-height: 24px;">Lihat dan ketahui anggota dari Badan Pengurus Harian (BPH)</span>
                  
                </button>
                <div class="content1 dropdown-content">
                    <div class="ketua">
                      <img src="/assets/pengurus.png" alt="" class="nama">
                      <span class="jabatan">Ketua OSIS</span>
                      <span class="nama-pengurus">Novi Rosidhatul</span>
                    </div>
                    <div class="wakil">
                      <img src="/assets/pengurus.png" alt="" class="nama">
                      <span class="jabatan">Ketua OSIS</span>
                      <span class="nama-pengurus">Novi Rosidhatul</span>
                    </div>
                    <div class="sekretaris1">
                      <img src="/assets/pengurus.png" alt="" class="nama">
                      <span class="jabatan">Ketua OSIS</span>
                      <span class="nama-pengurus">Novi Rosidhatul</span>
                    </div>
                    <div class="sekretaris2">
                      <img src="/assets/pengurus.png" alt="" class="nama">
                      <span class="jabatan">Ketua OSIS</span>
                      <span class="nama-pengurus">Novi Rosidhatul</span>
                    </div>
                    <div class="bendahara1">
                      <img src="/assets/pengurus.png" alt="" class="nama">
                      <span class="jabatan">Ketua OSIS</span>
                      <span class="nama-pengurus">Novi Rosidhatul</span>
                    </div>
                    <div class="bendahara2">
                      <img src="/assets/pengurus.png" alt="" class="nama">
                      <span class="jabatan">Ketua OSIS</span>
                      <span class="nama-pengurus">Novi Rosidhatul</span>
                    </div>

                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn2  btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span style="padding-right: 720px;font-family: 'Lato',san-serif; text-align:left; font-style: normal; font-weight: 700; font-size: 30px;line-height: 36px;">Divisi Keamanan</span><br/>
                    <span style="padding-right: 390px; font-family: 'Lato',san-serif; text-align:left; font-style: normal; font-weight: 300; font-size: 20px;line-height: 24px;">Lihat dan ketahui anggota dari Badan Pengurus Harian (BPH)</span>
                    
                  </button>
                  <div class="content2 dropdown-menu dropdown-content" ria-labelledby="dropdownMenuButton">
                      <div class="ketua">
                        <img src="/assets/pengurus.png" alt="" class="nama">
                        <span class="jabatan">Ketua Devisi</span>
                        <span class="nama-pengurus">Novi Rosidhatul</span>
                      </div>
                      <div class="wakil">
                        <img src="/assets/pengurus.png" alt="" class="nama">
                        <span class="jabatan">Anggota</span>
                        <span class="nama-pengurus">Novi Rosidhatul</span>
                      </div>
                      <div class="sekretaris1">
                        <img src="/assets/pengurus.png" alt="" class="nama">
                        <span class="jabatan">Anggota</span>
                        <span class="nama-pengurus">Novi Rosidhatul</span>
                      </div>
                      <div class="sekretaris2">
                        <img src="/assets/pengurus.png" alt="" class="nama">
                        <span class="jabatan">Anggota</span>
                        <span class="nama-pengurus">Novi Rosidhatul</span>
                      </div>
                      <div class="bendahara1">
                        <img src="/assets/pengurus.png" alt="" class="nama">
                        <span class="jabatan">Anggota</span>
                        <span class="nama-pengurus">Novi Rosidhatul</span>
                      </div>
                      <div class="bendahara2">
                        <img src="/assets/pengurus.png" alt="" class="nama">
                        <span class="jabatan">Anggota</span>
                        <span class="nama-pengurus">Novi Rosidhatul</span>
                      </div>
  
                    </div>
                  </div>
              </div>
               
            </div>
            <div class="tab-pane fade " role="tabpanel" id="profile" aria-labelledby="profile-tab">
              <div class="BPH">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">BADAN PENGURUS HARIAN</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
              <div class="keamanan">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">DIVISI KEAMANAN</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
              <div class="humas">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">DIVISI HUMAS</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
              <div class="keagamaan">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">DIVISI KEAGAMAAN</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
              <div class="kewirausahaan">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">DIVISI KEWIRAUSAHAAN</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
              <div class="kesehatan">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">DIVISI KESEHATAN</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
              <div class="kreatif">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">DIVISI KREATIF</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
              <div class="minatbakat">
                <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                <span class="devisi">DIVISI MINAT & BAKAT</span>
                <button type="" class="selengkapnya">Selengkapnya</button>
              </div>
            </div>
           
        </div>
    </div>

    
        </div>
    </div>
    <script>
      
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("Style/Halawal_osis.css") }}>
    <title>OSIS | Schoolyte</title>
</head>
<body>
    @include('components.Header ')
@yield('Navbar')
    <div class="beranda-osis" style="min-height: 520vh;">
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
          <div class="navbartab">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Struktur OSIS</button>
                <button class="tablinks" onclick="openTab(event, 'Tab2')">Divisi</button>

            </div>
            <div id="Tab1" class="tabcontent show active">
                <div class="container">
                    <ul>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Badan Pengurus Harian (BPH)<i class="icon-arrow"></i></a>
                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua OSIS</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua OSIS</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    <br/>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Divisi Keamanan <i class="icon-arrow"></i></a>
                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua Devisi</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua Devisi</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    <br/>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Divisi Humas <i class="icon-arrow"></i></a>
                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua OSIS</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua OSIS</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    <br/>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Divisi Keagamaan <i class="icon-arrow"></i></a>
                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    <br/>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Divisi Kewirausahaan <i class="icon-arrow"></i></a>

                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    <br/>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Divisi Kesehatan <i class="icon-arrow"></i></a>
                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    <br/>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Divisi Kreatif <i class="icon-arrow"></i></a>
                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    <br/>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Divisi Minat & Bakat <i class="icon-arrow"></i></a>
                        <ul class="dropdown-menu">
                        <li>
                            <div class="ketua">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="wakil">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Wakil Ketua </span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="sekretaris1">
                                    <img src="/assets/pengurus.png" alt="" class="nama">
                                    <span class="jabatan">Sekretaris1</span>
                                    <span class="nama-pengurus">Novi Rosidhatul</span>
                                    </div>
                        </li>
                        <li>
                            <div class="sekretaris2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Sekretaris2</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara1">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        <li>
                            <div class="bendahara2">
                            <img src="/assets/pengurus.png" alt="" class="nama">
                            <span class="jabatan">Bendahara1</span>
                            <span class="nama-pengurus">Novi Rosidhatul</span>
                            </div>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>

            <div id="Tab2" class="tabcontent">
                <div class="BPH">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">BADAN PENGURUS HARIAN</span>
                    <a href=""><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
                <div class="keamanan">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">DIVISI KEAMANAN</span>
                    <a href=""><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
                <div class="humas">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">DIVISI HUMAS</span>
                    <a href={{route('OSIS/Divisi_humas')}}><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
                <div class="keagamaan">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">DIVISI KEAGAMAAN</span>
                    <a href=""><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
                <div class="kewirausahaan">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">DIVISI KEWIRAUSAHAAN</span>
                    <a href=""><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
                <div class="kesehatan">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">DIVISI KESEHATAN</span>
                    <a href=""><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
                <div class="kreatif">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">DIVISI KREATIF</span>
                    <a href=""><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
                <div class="minatbakat">
                    <img src="/assets/mpls.png" alt="" class="img-pengurus" />
                    <span class="devisi">DIVISI MINAT & BAKAT</span>
                    <a href=""><button type="" class="selengkapnya">Selengkapnya</button></a>
                </div>
            </div>
          </div>
        </div>
    </div>
    <script>
        function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";


        }
        document.getElementById("defaultOpen").click();
    </script>
    <script>
    // Dropdown Menu
    var dropdown = document.querySelectorAll('.dropdown');
    var dropdownArray = Array.prototype.slice.call(dropdown,0);
    dropdownArray.forEach(function(el){
      var button = el.querySelector('a[data-toggle="dropdown"]'),
          menu = el.querySelector('.dropdown-menu'),
          arrow = button.querySelector('i.icon-arrow');

      button.onclick = function(event) {
        if(!menu.hasClass('show')) {
          menu.classList.add('show');
          menu.classList.remove('hide');
          arrow.classList.add('open');
          arrow.classList.remove('close');
          event.preventDefault();
        }
        else {
          menu.classList.remove('show');
          menu.classList.add('hide');
          arrow.classList.remove('open');
          arrow.classList.add('close');
          event.preventDefault();
        }
      };
    })

    Element.prototype.hasClass = function(className) {
        return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
    };
  </script>
</body>
</html>
@include('components.Footer')

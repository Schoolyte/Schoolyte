<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href={{ asset("Style/DaftarFasilitas.css") }}>
  <title>Fasilitas</title>
</head>
@yield('Navbar')
<body>
    <div class="fasilitas" style="min-height: 400vh;">
      <div class="tittle-page">
            <span>Fasilitas</span>
            <ul class="breadcrumb">
              <li><a href="#">Peminjaman</a></li>
              <li>Fasilitas</li>
            </ul>
        </div>
        <div class="intro">
          <img src="/assets/lapangan.png" alt="">
          <span>Fasilitas</span>
          <span>Dapatkan Informasi tentang fasilitas sekolah yang tersedia</span>
        </div>
        <div class="desc">
            <span>Jam Pelayanan</span>
            <span>Setiap hari selama jam belajar mengajar berlangsung, weekend & tanggal merah tutup</span>
            <span>Koleksi</span>
            <span>Terdapat fasilitas seperti LCD, Ruang Aula, Lapangan Basket, Lapangan Sepakbola, Lapangan Bulu Tangkis, Lapangan Voli, Ruang Band, Ruang Banjari, Laboratorium</span>
        </div>
        <div class="JadwalPinjam-base">
            <span class="span1">Jadwal Peminjaman Fasilitas</span>
            <span class="span2">Anda dapat melihat jadwal peminjaman fasilitas yang telah dipinjam</span>
            <a href={{route('Fasilitas/Jadwalpinjaman')}}><button type="submit" class="btn-lihat">Lihat</button></a>
        </div>
        <div class="navbartab">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Fasilitas</button>
                <button class="tablinks" onclick="openTab(event, 'Tab2')">Menunggu</button>
                <button class="tablinks" onclick="openTab(event, 'Tab3')">Dipinjam</button>
                <button class="tablinks" onclick="openTab(event, 'Tab4')">Kembali</button>
                <button class="tablinks" onclick="openTab(event, 'Tab5')">Selesai</button>
            </div>

            <div id="Tab1" class="tabcontent show active">
              <div class="pinjam1">
                    <a href={{route('Fasilitas/Formpinjam')}}>
                        <img src="/assets/lcd.png" alt="" class="img-pinjam">
                        <h1>LCD Proyektor</h1>
                        <span class="text">LCD Proyektor dapat dipinjam untuk menunjang proses pembelajaran di kelas ataupun diruang lain maupun untuk kepeluan rapat oleh guru</span>
                    </a>
              </div>
              <div class="pinjam2">
                    <a href={{route('Fasilitas/Formpinjam')}}>
                        <img src="/assets/aula.png" alt="" class="img-pinjam">
                        <h1>Ruang Aula</h1>
                        <span class="text">LCD Proyektor dapat dipinjam untuk menunjang proses pembelajaran di kelas ataupun diruang lain maupun untuk kepeluan rapat oleh guru</span>
                    </a>
                </div>
                <div class="pinjam3">
                    <a href={{route('Fasilitas/Formpinjam')}}>
                        <img src="/assets/aula.png" alt="" class="img-pinjam">
                        <h1>Ruang Aula</h1>
                        <span class="text">LCD Proyektor dapat dipinjam untuk menunjang proses pembelajaran di kelas ataupun diruang lain maupun untuk kepeluan rapat oleh guru</span>
                    </a>
                </div>
                <div class="pinjam4">
                    <a href={{route('Fasilitas/Formpinjam')}}>
                        <img src="/assets/aula.png" alt="" class="img-pinjam">
                        <h1>Ruang Aula</h1>
                        <span class="text">LCD Proyektor dapat dipinjam untuk menunjang proses pembelajaran di kelas ataupun diruang lain maupun untuk kepeluan rapat oleh guru</span>
                    </a>
                </div>
            </div>

            <div id="Tab2" class="tabcontent">
                <div class="konfirm1">
                        <img src="/assets/lcd.png" alt="" class="img-pinjam">
                        <h1>LCD Proyektor</h1>
                        <div class="id">ID Peminjaman : xxxxxxxx</div>
                        <div class="tgl">Senin, 26/08/2023</div>
                        <div class="jam">07.00 - 10.00</div>
                        <div class="k1">Menunggu Konfirmasi</div>

              </div>
            </div>
            <div id="Tab3" class="tabcontent">
                <div class="konfirm1">
                    <a href="" style="text-decoration: none;">
                        <img src="/assets/lcd.png" alt="" class="img-pinjam">
                        <h1>LCD Proyektor</h1>
                        <div class="id">ID Peminjaman : xxxxxxxx</div>
                        <div class="tgl">Senin, 26/08/2023</div>
                        <div class="jam">07.00 - 10.00</div>
                        <div class="A01">Sedang dipinjam</div>

                    </a>
                    <button type="submit" class="btn-kembali" onclick="openForm()">Kembalikan</button>
                        <div class="form-popup" id="myForm">
                            <div class="bg-popup">
                                <div class="identitas">
                                <img src="/assets/Puzzled.png" alt="" class="img-feedback">
                                <span class="pesan">Are You Sure?</span>
                                <a href="#"><button type="button" class="btn-yes" onclick="closeForm()">Yes</button></a>
                                <a href="#"><button type="button" class="btn-no" onclick="closeForm()">No</button></a>
                                </div>
                            </div>
                        </div>
              </div>
            </div>
            <div id="Tab4" class="tabcontent">
                <div class="konfirm1">
                    <a href="" style="text-decoration: none;">
                        <img src="/assets/lcd.png" alt="" class="img-pinjam">
                        <h1>LCD Proyektor</h1>
                        <div class="id">ID Peminjaman : xxxxxxxx</div>
                        <div class="tgl">Senin, 26/08/2023</div>
                        <div class="jam">07.00 - 10.00</div>
                        <div class="k1">Pengembalian</div>
                    </a>
              </div>
            </div>
            <div id="Tab5" class="tabcontent">
                <div class="konfirm1">
                    <a href="" style="text-decoration: none;">
                        <img src="/assets/lcd.png" alt="" class="img-pinjam">
                        <h1>LCD Proyektor</h1>
                        <div class="id">ID Peminjaman : xxxxxxxx</div>
                        <div class="tgl">Senin, 26/08/2023</div>
                        <div class="jam">07.00 - 10.00</div>
                        <div class="k1">Selesai</div>
                    </a>
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
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>
</html>
@include('components.Footer')

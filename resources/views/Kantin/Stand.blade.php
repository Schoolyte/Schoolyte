<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin - Stand</title>
    <link rel="stylesheet" href={{ asset("Style/Stand.css") }}>

</head>
@include('components.Header')
@yield('Navbar')
<body>
    <div class="main" style="min-height: 470vh;">
      <div class="tittle-page">
        <span>Kantin</span>
          <ul class="breadcrumb">
            <li><a href="#">Pembelian</a></li>
            <li>Kantin </li>
          </ul>
      </div>
      <div class="intro">
        <img src="/assets/image 19.png" alt="">
        <span>KANTIN</span>
        <span>Anda dapat melakukan pembelian di Kantin dengan mudah</span>
      </div>
      <div class="saldo">
        <img src="/assets/Wallet.png" alt=""><span>Rp 100.000</span>
      </div>
      <div class="navbartab">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Stand Kantin</button>
            <button class="tablinks" onclick="openTab(event, 'Tab2')">Pesanan Saya</button>
            <button class="tablinks" onclick="openTab(event, 'Tab3')">Selesai</button>
        </div>

        <div id="Tab1" class="tabcontent show active">
            <div class="dapur1">
                <a href="#">
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">Dapur Bu Dewi</span>
                <span class="text2">kode : 01</span>
                <span class="text3">Jenis : Makanan, Minuman</span>
                </a>
            </div>
            <div class="dapur2">
                <a href="#">
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">Dapur Bu Dewi</span>
                <span class="text2">kode : 01</span>
                <span class="text3">Jenis : Makanan, Minuman</span>
                </a>
            </div>
            <div class="dapur3">
                <a href="#">
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">Dapur Bu Dewi</span>
                <span class="text2">kode : 01</span>
                <span class="text3">Jenis : Makanan, Minuman</span>
                </a>
            </div>
            <div class="dapur4">
                <a href="#">
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">Dapur Bu Dewi</span>
                <span class="text2">kode : 01</span>
                <span class="text3">Jenis : Makanan, Minuman</span>
                </a>
            </div>
            <div class="dapur5">
                <a href="#">
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">Dapur Bu Dewi</span>
                <span class="text2">kode : 01</span>
                <span class="text3">Jenis : Makanan, Minuman</span>
                </a>
            </div>
            <div class="dapur6">
                <a href="#">
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">Dapur Bu Dewi</span>
                <span class="text2">kode : 01</span>
                <span class="text3">Jenis : Makanan, Minuman</span>
                </a>
            </div>
            <div class="dapur7">
                <a href="#">
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">Dapur Bu Dewi</span>
                <span class="text2">kode : 01</span>
                <span class="text3">Jenis : Makanan, Minuman</span>
                </a>
            </div>
        </div>

        <div id="Tab2" class="tabcontent">
            <div class="pesanan1">
                <span class="t1">No. Pesanan :</span>
                <span class="t2">Waktu Pemesanan</span>
                <div class="id">1234567890</div>
                <div class="tanggal">Senin, 11 Januari 2023</div>
                <img src="/assets/image 3.png" alt="" class="pesanan">
                <div class="kode">Dapur Bu Dewi, Kode: 01</div>
                <div class="minuman">1x Es Teh</div>
                <div class="makanan">3x Nasi Goreng Spesial</div>
                <div class="hg-minum">Rp. 3000</div>
                <div class="hg-makan">Rp. 30.000</div>
                <div class="total">Total Bayar : 33.000</div>
                <a href="#"><button type="submit" class="btn-primary">Selesai</button></a>
            </div>
            <div class="pesanan2">
                <span class="t1">No. Pesanan :</span>
                <span class="t2">Waktu Pemesanan</span>
                <div class="id">1234567890</div>
                <div class="tanggal">Senin, 11 Januari 2023</div>
                <img src="/assets/image 3.png" alt="" class="pesanan">
                <div class="kode">Dapur Bu Dewi, Kode: 01</div>
                <div class="minuman">1x Es Teh</div>
                <div class="makanan">3x Nasi Goreng Spesial</div>
                <div class="hg-minum">Rp. 3000</div>
                <div class="hg-makan">Rp. 30.000</div>
                <div class="total">Total Bayar : 33.000</div>
                <a href="#"><button type="submit" class="btn-primary">Selesai</button></a>
            </div>
        </div>
        <div id="Tab3" class="tabcontent">
        <div class="pesanan1">
                <span class="t1">No. Pesanan :</span>
                <span class="t2">Waktu Pemesanan</span>
                <div class="id">1234567890</div>
                <div class="tanggal">Senin, 11 Januari 2023</div>
                <img src="/assets/image 3.png" alt="" class="pesanan">
                <div class="kode">Dapur Bu Dewi, Kode: 01</div>
                <div class="minuman">1x Es Teh</div>
                <div class="makanan">3x Nasi Goreng Spesial</div>
                <div class="hg-minum">Rp. 3000</div>
                <div class="hg-makan">Rp. 30.000</div>
                <div class="total">Total Bayar : 33.000</div>
                <img src="/assets/Wallet.png" alt="" class="wallet"><span class="nominal">-Rp 33.000</span>
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
</body>
</html>
@include('components.Footer')


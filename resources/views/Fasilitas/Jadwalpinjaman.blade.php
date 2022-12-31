<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Jadwalpinjaman.css">
    <title>Document</title>
</head>
@yield('Navbar')
<body>
    <div class="main" style="min-height: 210vh;">
        <div class="tittle-page">
            <span>Fasilitas</span>
            <ul class="breadcrumb">
              <li><a href="#">Peminjaman</a></li>
              <li>Fasilitas</li>
            </ul>
        </div>
        <h1>Jadwal Peminjaman Fasilitas</h1>
        <h2>Silahkan lihat jadwal peminjaman fasilitas untuk memudahkan anda dalam meminjam fasilitas</h2>
        <div class="mb-3 col-sm-6">
            <input name="" type="date" class="form-control" id="TL"  placeholder="Masukkan nomor induk siswa"></input>
            <div class="form-date"></div>
        </div>
        <div class="pinjam1">
            <img src="/assets/lcd.png" alt="" class="img-pinjam">
            <div class="barang">LCD Proyektor</div>
            <div class="tgl">Senin, 26/08/2023</div>
            <div class="jam">07.00 - 10.00</div>
            <div class="status">Oleh : Novi Rosidhatul</div>
        </div>
        <div class="pinjam2">
            <img src="/assets/lcd.png" alt="" class="img-pinjam">
            <div class="barang">LCD Proyektor</div>
            <div class="tgl">Senin, 26/08/2023</div>
            <div class="jam">07.00 - 10.00</div>
            <div class="status">Oleh : Novi Rosidhatul</div>
        </div>
        <div class="pinjam3">
            <img src="/assets/aula.png" alt="" class="img-pinjam">
            <div class="barang">LCD Proyektor</div>
            <div class="tgl">Senin, 26/08/2023</div>
            <div class="jam">07.00 - 10.00</div>
            <div class="status">Oleh : Novi Rosidhatul</div>
        </div>
        <div class="pinjam4">
            <img src="/assets/aula.png" alt="" class="img-pinjam">
            <div class="barang">LCD Proyektor</div>
            <div class="tgl">Senin, 26/08/2023</div>
            <div class="jam">07.00 - 10.00</div>
            <div class="status">Oleh : Novi Rosidhatul</div>
        </div>
    </div>
</body>
</html>
@include('components.Footer')
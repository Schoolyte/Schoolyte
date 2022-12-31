<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Formpinjam.css">
    <title>Form Peminjaman Fasilitas</title>
</head>
@yield('Navbar')
<body>
    <div class="main" style="min-height: 180vh;">
        <div class="tittle-page">
            <span>Fasilitas</span>
            <ul class="breadcrumb">
              <li><a href="#">Peminjaman</a></li>
              <li>Fasilitas</li>
            </ul>
        </div>
        <div class="pinjam-fasilitas">
            <h1>Pinjam Fasilitas</h1>
            <img src="/assets/lcd.png" alt="" class="img-pinjam">
            <div class="nama-barang">LCD Proyektor</div>
            <p>LCD Proyektor dapat dipinjam untuk menunjang proses pembelajaran di kelas ataupun diruang lain maupun untuk kepeluan rapat oleh guru</p>
        </div>
        <div class="form-pinjam">
            <div class="mb-3 col-sm-6">
                <label for="exampleInputDate" class="label1 form-label">Tanggal Pinjam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                <input name="" type="date" class="tgl form-control" id="TL"  placeholder="Masukkan nomor induk siswa"></input>
                <div class="form-date"></div>
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputDate" class="label2 form-label">Waktu pinjam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                <input class="time" type="time" id="appt" name="Time" min="09:00" max="18:00" required>
                <div class="form-date"></div>
            </div>
            
        </div>
    </div>
</body>
</html>
@include('components.Footer')
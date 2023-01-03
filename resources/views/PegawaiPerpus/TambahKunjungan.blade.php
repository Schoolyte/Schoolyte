<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/TambahKunjungan.css">
    <title>Document</title>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="main" style="min-height: 300vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
              <li><a href="#">Peminjaman</a></li>
              <li>Perpustakaan</li>
            </ul>
        </div>
        <h1>Tambah Kunjungan</h1>
        <div class="formk">
            <div class="mb-3 col-sm-6">
                <label for="exampleInputText" class="form1 form-label">Nama </label>
                <input name="" type="text" class="ctrl1 form-control" id="Nama"  placeholder="Nama Buku" required></input>
                <div class="form-text"></div>
            </div>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputText" class="form2 form-label">Status</label>
                <input name="" type="text" class="ctrl2 form-control" id="Nama"  placeholder="Penulis" required></input>
                <div class="form-text"></div>
            </div>
           <span class="txt">ATAU SCAN QR CODE</span>
           <a href="#"><button type="submit" class="btn-scan"><i class="fa fa-qrcode" style="font-size:24px"></i> Scan Disini</button></a>
           <a href="#"><button type="submit" class="btn-save"><i class="fa fa-save"></i> Save</button></a>
        </div>
    </div>
</body>
</html>
@include('components.Footer')
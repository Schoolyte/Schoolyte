<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Rapornonsiswa.css">
    <title>Document</title>
</head>
@yield('Navbar')
<body>
    <div class="page-rapor" style="min-height: 210vh;">
    <div class="page-tittle1">
            <h5 class="tittle1">Rapor </h5>
            <ul class="breadcrumb">
                <li><a href="#">Akademik</a></li>
                <li>Rapor</li>
              </ul>
        </div>
        <div class="warning">
            <h1>Anda dapat melihat dan memantau nilai rapor seluruh siswa</h1>
        </div>
        <div class="second">
            <a href="#" style="text-decoration: none;">
                <div class="ganjil">
                    <span>Semester Ganjil</span>
                    <span>Pantau nilai rapor siswa di semester ganjil</span>
                </div>
                
            </a>
            <a href="#" style="text-decoration: none;">
                <div class="genap">
                    <span>Semester Genap</span>
                    <span>Pantau nilai rapor siswa di semester genap</span>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
@include('components.Footer')
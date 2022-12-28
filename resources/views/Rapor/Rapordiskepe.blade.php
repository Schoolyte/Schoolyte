<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Rapordinas.css">
    <title>Document</title>
</head>
@yield('Navbar')
<body>
    <div class="page-rapor" style="min-height: 200vh;">
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
                <div class="tahun-ajaran1">
                    <img src="/assets/Report.png" alt="" style="position: absolute; width: 76px; height: 76px; left: 148px; top: 25px;">
                    <div class="text1">Tahun Ajaran 2020/2021</div>
                    <div class="text2">Pantau nilai rapor siswa pada tahun ajaran 2020/2021</div>
                </div>
            </a>
            <a href="#" style="text-decoration: none;">
                <div class="tahun-ajaran2">
                    <img src="/assets/Report.png" alt="" style="position: absolute; width: 76px; height: 76px; left: 148px; top: 25px;">
                    <div class="text1">Tahun Ajaran 2021/2022</div>
                    <div class="text2">Pantau nilai rapor siswa pada tahun ajaran 2021/2022</div>
                </div>
            </a>
            <a href="#" style="text-decoration: none;">
                <div class="tahun-ajaran3">
                    <img src="/assets/Report.png" alt="" style="position: absolute; width: 76px; height: 76px; left: 148px; top: 25px;">
                    <div class="text1">Tahun Ajaran 2022/2023</div>
                    <div class="text2">Pantau nilai rapor siswa pada tahun ajaran 2022/2023</div>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
@include('components.Footer')
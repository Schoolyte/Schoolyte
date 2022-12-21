<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/PenilaianGuruDinas.css">
    <title>Document</title>
</head>
<body>
@yield('Navbar')
    <div class="penilaian-pembelajaran" style="min-height: 200vh;">
        <div class="tittle-page">
            <span>Penilaian Pembelajaran</span>
            <ul class="breadcrumb">
              <li><a href="#">Akademik</a></li>
              <li>Penilaian Pembelajaran</li>
            </ul>
        </div>
        <div class="warning">
            <h1>Anda dapat melihat dan memantau nilai belajar seluruh siswa</h1>
            <span>• Nilai terdiri dari nilai tugas hingga nilai ujian</span>
        </div>
        <div class="tahun-ajaran-siswa">
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
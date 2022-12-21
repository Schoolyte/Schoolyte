<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/PPguru.css">
    <title>Document</title>
</head>
<body>
@yield('Navbar')
    <div class="penilaian-guru" style="min-height: 210vh;">
        <div class="tittle-page">
            <span>Penilaian Pembelajaran</span>
            <ul class="breadcrumb">
              <li><a href="#">Akademik</a></li>
              <li>Penilaian Pembelajaran</li>
            </ul>
        </div>
        <div class="warning">
            <span>Anda dapat melihat dan memantau nilai belajar seluruh siswa</span>
            <span>• Nilai terdiri dari nilai tugas hingga nilai ujian</span>
        </div>
        <div class="penilaian-place">
            
        </div>
    </div>
</body>
</html>
@include('components.Footer')
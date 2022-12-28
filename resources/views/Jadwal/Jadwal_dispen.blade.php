<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style/Jadwal_dispen.css">
    <title>Document</title>
</head>
<body>
    @yield('Navbar')
    <div class="jadwal-dispen" style="min-height: 230vh;">
        <div class="tittle-page">
            <span>Jadwal Kelas</span>
            <ul class="breadcrumb">
              <li><a href="#jadwal">Akademik</a></li>
              <li>Jadwal Kelas</li>
            </ul>
        </div>
        <div class="warning">
            <span>Anda dapat memantau jadwal kelas siswa dan jadwal guru mengajar</span>
        </div>
       <a href="/Jadwalsiswa"><button class="btn-jadwal-siswa"><img src="/assets/schedule.png" class="img-jadwal" alt=""><br/><br/><br/><br/><br/>Siswa</button></a>
       <a href="/Jadwalguru"><button class="btn-jadwal-guru"><img src="/assets/schedule.png" class="img-jadwal" alt=""><br/><br/><br/><br/><br/>Guru</button></a>
    </div>
</body>
</html>
@include('components.Footer')
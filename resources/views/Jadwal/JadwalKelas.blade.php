<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset("Style/Jadwalsiswa.css") }}>
    <title>Jadwal Kelas | Schoolyte</title>
</head>
<body>
    @include('components.Header ')
    @yield('Navbar')
    <div class="jadwal-siswa" style="min-height: 240vh;">
        <div class="tittle-page">
            <span>Jadwal Kelas</span>
            <ul class="breadcrumb">
              <li><a href="#jadwal">Akademik</a></li>
              <li>Jadwal Kelas</li>
            </ul>
        </div>
        <div class="identitas">
            <img src="/assets/img-siswa.png"/>
            <h5>{{ $siswa->nama }}</h5>
            <h1>{{ $siswa->kelas->nama_kelas }}</h1>
        </div>
        <div class="jadwal-place" id="jadwal">
            <span class="waktu">Waktu</span>
            <span class="mapel">Mata Pelajaran</span>
            <span class="guru">Guru</span>
            <table class="table table-hover">
                <tbody>
                  @foreach ($jadwals as $item)
                    <tr>
                      <th scope="row">{{ $item->jam }} </th>
                      <th scope="row">{{ $item->mapel->mapel }}</th>
                      <th scope="row">{{ $item->guru->nama }}</th>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <a href="?hari=senin"><button type="button" class="btn-senin"><img src="/assets/Schedule.png" class="senin" width="35" height="35"/> Senin</button></a>
        <a href="?hari=selasa"><button type="button" class="btn-selasa"><img src="/assets/Schedule.png" class="selasa" width="35" height="35"/> Selasa</button></a>
        <a href="?hari=rabu"><button type="button" class="btn-rabu"><img src="/assets/Schedule.png" class="rabu" width="35" height="35"/>Rabu</button></a>
        <a href="?hari=kamis"><button type="button" class="btn-kamis"><img src="/assets/Schedule.png" class="kamis" width="35" height="35"/>Kamis</button></a>
        <a href="?hari=jumat"><button type="button" class="btn-jumat"><img src="/assets/Schedule.png" class="jumat" width="35" height="35"/>Jumat</button></a>
    </div>
</body>
</html>
@include('components.Footer')

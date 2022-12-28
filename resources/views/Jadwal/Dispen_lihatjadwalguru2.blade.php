<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Viewjadwalguru.css">
    <title>Document</title>
</head>
@yield('Navbar')
<body>
    <div class="jadwal-guru" style="min-height: 240vh;">
        <div class="tittle-page">
            <span>Penilaian Pembelajaran</span>
            <ul class="breadcrumb">
              <li><a href="#jadwal">Akademik</a></li>
              <li>Penilaian Pembelajaran</li>
            </ul>
        </div>
        <div class="identitas">
            <img src="/assets/img-siswa.png"/>
            <h5>Novi Rosidhatul Aulia</h5>
            <h1>X MIPA 1</h1>
        </div>
        <div class="jadwal-place" id="jadwal">
            <span class="waktu">Waktu</span>
            <span class="mapel">Mata Pelajaran</span>
            <span class="guru">Kelas</span>
            <table class="table table-hover">
                
                <tbody>
                  <tr>
                    <th scope="row">07.00 - 08.20 </th> 
                    <th scope="row">Matematika</th>
                    <th scope="row">X IPS 1</th>
                  </tr>
                  <tr>
                    <th scope="row">08.20 - 09.40</th>
                    <th scope="row">Matematika</th> 
                    <th scope="row">X MIPA 1</th>
                  </tr>
                  <tr>
                    <th scope="row">09.40 - 10.20</th>
                    <th scope="row">Matematika</th> 
                    <th scope="row">XII IPS 1</th>
                  </tr>
                  <tr>
                    <th scope="row">10.20 - 11.40</th>
                    <th scope="row">Matematika</th> 
                    <th scope="row">XI MIPA 1</th>
                  </tr>
                  
                </tbody>
                
              </table>
        </div>
        <a href="#jadwal"><button type="button" class="btn-senin"><img src="/assets/Schedule.png" class="senin" width="35" height="35"/> Senin</button></a>
        <a href="#jadwal"><button type="button" class="btn-selasa"><img src="/assets/Schedule.png" class="selasa" width="35" height="35"/> Selasa</button></a>
        <a href="#jadwal"><button type="button" class="btn-rabu"><img src="/assets/Schedule.png" class="rabu" width="35" height="35"/>Rabu</button></a>
        <a href="#jadwal"><button type="button" class="btn-kamis"><img src="/assets/Schedule.png" class="kamis" width="35" height="35"/>Kamis</button></a>
        <a href="#jadwal"><button type="button" class="btn-jumat"><img src="/assets/Schedule.png" class="jumat" width="35" height="35"/>Jumat</button></a>
    </div>
</body>
</html>
@include('components.Footer')
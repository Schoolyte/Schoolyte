<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style/Dispen_lihatjadwal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    @yield('Navbar')
    <div class="jadwal-dispenview">
        <div class="tittle-page">
            <span>Jadwal Kelas</span>
            <ul class="breadcrumb">
              <li><a href="#jadwal">Akademik</a></li>
              <li>Jadwal Kelas</li>
            </ul>
        </div>
        <span class="siswa">Jadwal Kelas Siswa</span>
        <div class="dropdown">
            <button class="dropbtn2 active" role="button">Pilih hari
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="content2 dropdown-content">
                <div class="content">
                  <li><a href="#">Senin</a></li>
                  <li><a href="#">Selasa</a></li>
                  <li><a href="#">Rabu</a></li>
                  <li><a href="#">Kamis</a></li>
                </div>  
              </div>
            </div>
          </div>
        <div class="jadwal-siswa">
            <span class="waktu">Waktu</span>
            <span class="mapel">Mata Pelajaran</span>
            <span class="guru">Guru</span>
            <table class="table table-hover">
                
                <tbody>
                  <tr>
                    <th scope="row">07.00 - 08.20 </th> 
                    <th scope="row">Matematika</th>
                    <th scope="row">Supriyadi, S.pd.</th>
                  </tr>
                  <tr>
                    <th scope="row">08.20 - 09.40</th>
                    <th scope="row">Matematika</th> 
                    <th scope="row">Supriyadi, S.pd.</th>
                  </tr>
                  <tr>
                    <th scope="row">09.40 - 10.20</th>
                    <th scope="row">Matematika</th> 
                    <th scope="row">Supriyadi, S.pd.</th>
                  </tr>
                  <tr>
                    <th scope="row">10.20 - 11.40</th>
                    <th scope="row">Matematika</th> 
                    <th scope="row">Supriyadi, S.pd.</th>
                  </tr>
                  <tr>
                    <th scope="row">11.40 - 12.45</th>
                    <th scope="row">Istirahat</th>
                    <th scope="row">-</th>
                  </tr>
                  <tr>
                    <th scope="row">12.45 - 13.30</th>
                    <th scope="row">Matematika</th>
                    <th scope="row">Supriyadi, S.pd.</th>
                  </tr>
                  <tr>
                    <th scope="row">13.30 - 15.00</th>
                    <th scope="row">Matematika</th>
                    <th scope="row">Supriyadi, S.pd.</th>
                  </tr>
                </tbody>
                
              </table>
              
        </div>
        <div class="dropdown">
            <button class="dropbtn4 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas X
              
            </button>
            <div class="content4 dropdown-content">
                <div class="content">
                  <li><a href="#tabs">X MIPA 1</a></li>
                  <li><a href="#tabs">X MIPA 2</a></li>
                  <li><a href="#tabs">X IPS 1</a></li>
                  <li><a href="#tabs">X IPS 2</a></li>
                </div>  
              </div>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn5 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas XI
            
            </button>
            <div class="content5 dropdown-content">
                <div class="content">
                  <li><a href="#tabs">XI MIPA 1</a></li>
                  <li><a href="#tabs">XI MIPA 2</a></li>
                  <li><a href="#tabs">XI IPS 1</a></li>
                  <li><a href="#tabs">XI IPS 2</a></li>
                </div>  
              </div>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn3 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas XII
              
            </button>
            <div class="content3 dropdown-content">
                <div class="content">
                  <li><a href="#tabs">XII MIPA 1</a></li>
                  <li><a href="#tabs">XII MIPA 2</a></li>
                  <li><a href="#tabs">XII IPS 1</a></li>
                  <li><a href="#tabs">XII IPS 2</a></li>
                </div>  
              </div>
            </div>
    </div>
</body>
</html>
@include('components.Footer')
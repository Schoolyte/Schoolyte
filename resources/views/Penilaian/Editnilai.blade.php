<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/Penilaianguru2.css">
</head>
<body>
    @yield('Navbar')
    <div class="penilaian-guru">
        <div class="tittle-page">
            <span>Penilaian Pembelajaran</span>
            <ul class="breadcrumb">
              <li><a href="#">Akademik</a></li>
              <li>Penilaian Pembelajaran</li>
            </ul>
        </div>
        <div class="warning">
            <h1>Anda dapat melihat dan memantau nilai belajar seluruh siswa</h1>
            <span>⁕ Nilai terdiri dari nilai tugas hingga nilai ujian</span>
        </div>
        <div class="editnilai-place">

        </div>
          <div class="dropdown">
          <button class="dropbtn4 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas X
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="content4 dropdown-content">
              <div class="content">
                <li><a href="#">X MIPA 1</a></li>
                <li><a href="#">X MIPA 2</a></li>
                <li><a href="#">X IPS 1</a></li>
                <li><a href="#">X IPS 2</a></li>
              </div>  
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn5 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas XI
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="content5 dropdown-content">
              <div class="content">
                <li><a href="#">XI MIPA 1</a></li>
                <li><a href="#">XI MIPA 2</a></li>
                <li><a href="#">XI IPS 1</a></li>
                <li><a href="#">XI IPS 2</a></li>
              </div>  
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn3 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas X
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="content3 dropdown-content">
              <div class="content">
                <li><a href="#">XII MIPA 1</a></li>
                <li><a href="#">XII MIPA 2</a></li>
                <li><a href="#">XII IPS 1</a></li>
                <li><a href="#">XII IPS 2</a></li>
              </div>  
            </div>
          </div>
        </div>  
    </div>
    @include('components.Footer')
</body>
</html>
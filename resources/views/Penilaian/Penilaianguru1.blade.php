<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style/Penilaianguru.css">
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
          <div class="penilaian-place">
            <div class="dropdown">
                <button class="dropbtn1">Semester Ganjil <br/>Pantau nilai tugas hingga nilai ujianmu di semester ganjil 
                  <img src="/assets/chevron-compact-down.svg" alt="" class="img-down1">
                </button>
                
                <div class="content1 dropdown-content">
                  
                  <div class="row">
                    <div class="column">
                      <a href="#tabs">Matematika</a>
                      <a href="#tabs">IPA</a>
                      <a href="#tabs">Bhs. Inggris</a>
                    </div>
                    <div class="column">
                      
                      <a href="#tabs">Biologi</a>
                      <a href="#tabs">Bhs. indonesia</a>
                      <a href="#tabs">Pendidikan Agama</a>
                    </div>
                    <div class="column">
                      
                      <a href="#tabs">Penjas</a>
                      <a href="#tabs">TIK</a>
                      <a href="#tabs">PPKN</a>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="dropdown">
                <button class="dropbtn2">Semester Genap <br/>Pantau nilai tugas hingga nilai ujianmu di semester Genap
                  <img src="/assets/chevron-compact-down.svg" alt="" class="img-down1">
                </button>
                <div class="content2 dropdown-content">
                  
                  <div class="row">
                    <div class="column">
                      <a href="#tabs">Matematika</a>
                      <a href="#tabs">IPA</a>
                      <a href="#tabs">Bhs. Inggris</a>
                    </div>
                    <div class="column">
                      
                      <a href="#tabs">Biologi</a>
                      <a href="#tabs">Bhs. indonesia</a>
                      <a href="#tabs">Pendidikan Agama</a>
                    </div>
                    <div class="column">
                      
                      <a href="#tabs">Penjas</a>
                      <a href="#tabs">TIK</a>
                      <a href="#tabs">PPKN</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
         
            
          </div>
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
</body>
</html>
@include('components.Footer')

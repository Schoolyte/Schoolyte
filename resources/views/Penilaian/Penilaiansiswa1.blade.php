<!DOCTYPE html>
<html lang="en">
  @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <title>Penilaian Pembelajaran | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Penilaiansiswa1.css") }}>
</head>
<body>
  @yield('Navbar')
    <div class="page-penilaian" style="min-height: 300vh;">
        <div class="tittle-page">
          <span>Penilaian Pembelajaran</span>
          <ul class="breadcrumb">
            <li><a href="#">Akademik</a></li>
            <li>Penilaian Pembelajaran</li>
          </ul>
        </div>
        <div class="identitas-siswa">
          <img src="/assets/img-siswa.png">
          <h1>Novi Rosidhatul Aulia</h1>
          <span>X MIPA 1</span>
        </div>
        <div class="Penilaian-place" id="penilaian">
          <div class="dropdown">
            <button class="dropbtn1">Semester Ganjil <br/>Pantau nilai tugas hingga nilai ujianmu di semester ganjil
              <i class="fa fa-caret-down"></i>
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

          <div class="navtabs" id="tabs">
            <ul class="nav nav-tabs ">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" id="home-tab" type="button"
                    data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">Pengetahuan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" id="profile-tab" type="button"
                    data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">Keterampilan</button>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show" role="tabpanel" id="home" aria-labelledby="home-tab">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                          <tr>

                            <th scope="col">Kategori</th>
                            <th scope="col">Nilai</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Tugas 1</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">Tugas 2</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">Tugas 3</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">UTS</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">UAS</th>
                            <th scope="row"></th>
                          </tr>
                        </tbody>
                        <thead class="thead-dark">
                          <tr>

                            <th scope="col">Rata - rata</th>
                            <th scope="col"></th>

                          </tr>
                        </thead>
                      </table>
                </div>
                <div class="tab-pane fade show" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                    <table class="table table-hover" >
                        <thead class="thead">
                          <tr>

                            <th scope="col">Kategori</th>
                            <th scope="col">Nilai</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Tugas 1</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">Tugas 2</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">Tugas 3</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">UTS</th>
                            <th scope="row"></th>
                          </tr>
                          <tr>
                            <th scope="row">UAS</th>
                            <th scope="row"></th>
                          </tr>
                        </tbody>
                        <thead class="thead-dark">
                          <tr>

                            <th scope="col">Rata - rata</th>
                            <th scope="col"></th>

                          </tr>
                        </thead>
                      </table>
                </div>

            </div>
        </div>
          <div class="dropdown">
            <button class="dropbtn2">Semester Genap <br/>Pantau nilai tugas hingga nilai ujianmu di semester Genap
              <i class="fa fa-caret-down"></i>
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
        <img class="icon-btn1" src="/assets/School Building.png" width="35" height="35" padding="5" />
        <button type="button" class="btn-kelas-X"> &nbsp; Kelas X</button>
        <img class="icon-btn2"src="/assets/School Building.png"  width="35" height="35"/>
        <button type="button" class="btn-kelas-XI"> &nbsp; Kelas XII</button>
        <img class="icon-btn3" src="/assets/School Building.png" width="35" height="35"/>
        <button type="button" class="btn-kelas-XII"> &nbsp; Kelas XII</button>
      </div>
</body>
</html>
@include('components.Footer')

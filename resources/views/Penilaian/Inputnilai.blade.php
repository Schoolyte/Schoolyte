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
    <link rel="stylesheet" href="Style/Inputnilai.css">
    <title>Document</title>
</head>
<body>
    @yield('Navbar')
    <div class="input-nilai">
        <div class="tittle-page">
            <span>Penilaian Pembelajaran</span>
            <ul class="breadcrumb">
              <li><a href="#tabs">Akademik</a></li>
              <li>Penilaian Pembelajaran</li>
            </ul>
        </div>
        <div class="warning">
            <h1>Anda dapat melihat dan memantau nilai belajar seluruh siswa</h1>
            <span>⁕ Nilai terdiri dari nilai tugas hingga nilai ujian</span>
        </div>
        <div class="inputnilai-place">
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
                                <th scope="row"><input type="integer"  name="number" value="" width="66" height="37"></th> 
                              </tr>
                              <tr>
                                <th scope="row">Tugas 2</th>
                                <th scope="row"><input type="integer"  name="number" value="" width="66" height="37"></th> 
                              </tr>
                              <tr>
                                <th scope="row">Tugas 3</th>
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""></th> 
                              </tr>
                              <tr>
                                <th scope="row">UTS</th>
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""></th> 
                              </tr>
                              <tr>
                                <th scope="row">UAS</th>
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""></th>
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
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""></th> 
                              </tr>
                              <tr>
                                <th scope="row">Tugas 2</th>
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""></th> 
                              </tr>
                              <tr>
                                <th scope="row">Tugas 3</th>
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""></th> 
                              </tr>
                              <tr>
                                <th scope="row">UTS</th>
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""></th> 
                              </tr>
                              <tr>
                                <th scope="row">UAS</th>
                                <th scope="row"><input type="text" id="row-1-age" name="row-1-age" value=""> </th>
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
        </div>
        <div class="dropdown">
            <button class="dropbtn4 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas X
              <i class="fa fa-caret-down"></i>
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
              <i class="fa fa-caret-down"></i>
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
            <button class="dropbtn3 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas X
              <i class="fa fa-caret-down"></i>
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
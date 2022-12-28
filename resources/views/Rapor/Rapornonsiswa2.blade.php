<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Rapornonsiswa2.css">
    <title>Rapor-view-Wakel-Kepsek-Pengawas-Dispen</title>
</head>
@yield('Navbar')
<body>
    <div class="page-rapor" style="min-height: 220vh;">
    <div class="page-tittle1">
            <h5 class="tittle1">Rapor </h5>
            <ul class="breadcrumb">
                <li><a href="#">Akademik</a></li>
                <li>Rapor</li>
              </ul>
        </div>
        <div class="warning">
            <h1>Anda dapat melihat dan memantau nilai rapor seluruh siswa</h1>
        </div>
        <div class="indentitas">

        </div>
        <div class="tabel-nilai">
        <div class="tittle-rapor"> <h2>Semester Ganjil</h2>
            </div>
               
                <table class="table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Pengetahuan</th>
                        <th scope="col">Keterampilan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Tugas 1</th> 
                        <th scope="row">80</th> 
                        <th scope="row">80</th> 
                      </tr>
                      <tr>
                        <th scope="row">Tugas 2</th>
                        <th scope="row">80</th> 
                        <th scope="row">80</th> 
                      </tr>
                      <tr>
                        <th scope="row">Tugas 3</th>
                        <th scope="row">80</th> 
                        <th scope="row">80</th> 
                      </tr>
                      <tr>
                        <th scope="row">UTS</th>
                        <th scope="row">80</th> 
                        <th scope="row">80</th> 
                      </tr>
                      <tr>
                        <th scope="row">UAS</th>
                        <th scope="row">80</th>
                        <th scope="row">80</th> 
                      </tr>
                    </tbody>
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">Rata - rata</th>
                        <th scope="col">80</th>
                        <th scope="row">80</th> 
                      </tr>
                    </thead>
                </table>
                <button type="button" aria-label="print" class="btn-active">Cetak</button>
        </div>
    </div>
</body>
</html>
@include('components.Footer')
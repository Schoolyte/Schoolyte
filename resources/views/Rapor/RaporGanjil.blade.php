<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapor Ganjil | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Munculrapor.css") }}>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="view-rapor">
        <div class="page-tittle1">
            <h5 class="tittle1">Rapor </h5>
            <ul class="breadcrumb">
                <li><a href="#">Akademik</a></li>
                <li><a href="#">Rapor</a></li>
                <li>Novi Rosidhatul Aulia</li>
              </ul>
        </div>
        <div class="identitas">
            <img src="/assets/img-siswa.png"/>
            <h5>Novi Rosidhatul Aulia</h5>
            <h1>X MIPA 1</h1>
        </div>
        <div class="warning">
            <span>Pantau hasil belajarmu di rapot tiap semester!</span>
            <h1>• Anda dapat memantau nilai belajar setiap tingkatan kelas yang terbagi dalam rapot tiap semester</h1>
        </div>
        <div class="table-rapor">
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

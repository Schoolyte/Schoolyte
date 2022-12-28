<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapor | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/RaporSiswa.css") }}>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="rapor">

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
            <span>• Anda dapat memantau nilai belajar setiap tingkatan kelas yang terbagi dalam rapot tiap seemester</span>
        </div>
        <div class="rapor-place" id="rapor-siswa">
            <a href={{route('Rapor/RaporSiswa/RaporGanjil')}}>
            <div class="rapor-ganjil" >

                <img src="/assets/Document.png"/>
                <span>Rapor Semester Ganjil</span>

            </div>
            </a>
            <a href={{route('Rapor/RaporSiswa/RaporGenap')}}>
            <div class="rapor-genap" >
                <img src="/assets/Document.png"/>
                <span>Rapor Semester Genap</span>
            </div>
            </a>

        </div>
        <img src="/assets/School Building.png" class="icon-btn1"/>
        <a href="#rapor-siswa"><button type="button" class="btn-kelas-X" >&nbsp;Kelas X</button></a>
        <img src="/assets/School Building.png" class="icon-btn2"/>
        <a href="#rapor-siswa"><button type="button" class="btn-kelas-XI" >&nbsp;Kelas XI</button></a>
        <img src="/assets/School Building.png" class="icon-btn3"/>
        <a href="#rapor-siswa"><button type="button" class="btn-kelas-XII" >&nbsp;Kelas XII</button></a>

    </div>
</body>
</html>

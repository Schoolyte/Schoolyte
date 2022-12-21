<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapor</title>
    <link rel="stylesheet" href="Style/Lihatrapor.css">
</head>
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
            <a href="#">
            <div class="rapor-ganjil" >
              
                <img src="/assets/Document.png"/>
                <span>Rapor Semester Ganjil</span>
                
            </div>
            </a>
            <a href="#">
            <div class="rapor-genap" >
                <img src="/assets/Document.png"/>
                <span>Rapor Semester Genap</span>
            </div>
            </a>

        </div>
        <a href="#rapor-siswa"><button type="button" class="btn-kelas-X" ><img src="/assets/School Building.png" class="icon-btn1"/>&nbsp;Kelas X</button></a>
        <a href="#rapor-siswa"><button type="button" class="btn-kelas-XI" ><img src="/assets/School Building.png" class="icon-btn2"/>&nbsp;Kelas XI</button></a>
        <a href="#rapor-siswa"><button type="button" class="btn-kelas-XII" ><img src="/assets/School Building.png" class="icon-btn3"/>&nbsp;Kelas XII</button></a>

    </div>
</body>
</html>

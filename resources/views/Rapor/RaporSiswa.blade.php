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
                <li>{{ (Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa)->kelas->nama_kelas }}</li>
              </ul>
        </div>
        <div class="identitas">
            <img src="/assets/img-siswa.png">
            <h1>{{ (Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa)->nama }}</h1>
            <span>{{ (Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa)->kelas->nama_kelas }}</span>
        </div>
        <div class="warning">
            <span>Pantau hasil belajarmu di rapot tiap semester!</span>
            <span>• Anda dapat memantau nilai belajar setiap tingkatan kelas yang terbagi dalam rapot tiap seemester</span>
        </div>
        <div class="rapor-place" id="rapor-siswa">
            <a href={{route('Rapor/RaporSiswa/RaporGanjil', ['kelasId' => @$_GET['kelasId'] ?? @$arrIdKelas[0] ?? ''])}}>
            <div class="rapor-ganjil" >
                <img src="/assets/Document.png"/>
                <span>Rapor Semester Ganjil</span>
            </div>
            </a>
            <a href={{route('Rapor/RaporSiswa/RaporGenap', ['kelasId' => @$_GET['kelasId'] ?? @$arrIdKelas[0] ?? ''])}}>
            <div class="rapor-genap" >
                <img src="/assets/Document.png"/>
                <span>Rapor Semester Genap</span>
            </div>
            </a>

        </div>

        {{-- arrKelas --}}

        @foreach ($arrKelas as $kelas)
          <div style="position: relative;">
                <img src="/assets/School Building.png" class="icon-btn1" style="position: relative;"/>
                <a href="?kelasId={{ $kelas->id }}"><button type="button" class="btn-kelas-X" style="position: relative;">&nbsp;{{ $kelas->nama_kelas }}</button></a>
          </div>
        @endforeach

    </div>
</body>
</html>

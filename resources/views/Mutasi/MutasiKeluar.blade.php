<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/MutasiKeluar.css') }}">
    <title>Mutasi Keluar | Schoolyte</title>
</head>
@yield('Navbar')
<body>
    <div class="mutasi-keluar" style="min-height: 200vh;">
        <div class="tittle-page">
            <span>Mutasi </span>
            <ul class="breadcrumb">
              <li><a href="#">Akademik</a></li>
              <li>Mutasi </li>
            </ul>
        </div>
        <div class="second">
            <h1>Mutasi Siswa Keluar</h1>
            <p>Mutasi keluar diperuntukkan bagi siswa yang hendak
                melakukan perpindahan ke sekolah lain. Apabila ingin
                mengajukan mutasi keluar, silahkan melengkapi formulir berikut.
            </p>
            <a href="{{ route("Mutasi/FormMutasi") }}"><button class="btn-submit" type="submit">Mutasi Keluar</button></a>
        </div>
    </div>
</body>
</html>
@include('components.Footer')

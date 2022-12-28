<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("Style/Strukturorganisasi.css") }}>
    <title>Struktur Organisasi Sekolah | Schoolyte</title>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="struktur-guru" style="min-height: 180vh;">
        <div class="tittle-page">
            <span>Struktur Organisasi</span>
            <ul class="breadcrumb">
              <li><a href={{route('Dashboard')}}>Dashboard</a></li>
              <li>Struktur Organisasi</li>
            </ul>
        </div>
        <img src="/assets/struktur-guru.png" alt="" class="img-struktur">
    </div>
</body>
</html>
@include('components.Footer')

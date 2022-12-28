<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Saya</title>
    <link rel="stylesheet" href="Style/KartuDigital.css">
</head>
<body>
    @yield('Navbar')
    <div class="KartuDigital">
        <div class="title">Kartu Pelajar Digital </div>

    </div>
    <div class="Kartu-Digital">
        <img src="/assets/Base-KartuPelajarDigital.png" class="Kartu-Pelajar" >
        <div class="img-profile">
            <img src="/assets/img-profile.jpg" class="image-profile">
        </div>
        <div class="Nama">
            <td>Novi Roshidatul Aulia</td>
        </div>
        <div class="Status">
            <td>Status : Siswa</td>
        </div>
        <div class="NIS">
            <td>2005121035</td>
        </div>
        <div class="TTL">
            <td>Surabaya, 31 Agustus 1997</td>
        </div>
        <div class="Alamat">
            <td>Jalan Mawar No 123, Surabaya</td>
        </div>
        <div class="indent">
            test
        </div>
</body>

</html>




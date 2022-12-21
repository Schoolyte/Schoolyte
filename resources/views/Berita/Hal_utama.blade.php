<!DOCTYPE html>
<html lang="en">
    @include('components.HeaderB')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Style/Hal_utama.css">
</head>
<body>
    @yield('content')
    <div class="news-page">
        <div class="news-tittle">
            <h5>Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</h5>
            <ul class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Berita</a></li>
                <li>Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</li>
              </ul>
        </div>
       <div class="tanggal">
        <img src="/assets/kalender.png"/>
        <span>Senin, 16 Juli 2023</span>
       </div>
       <div class="news">
        <img src="/assets/mpls.png">
        <p>Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Bari dan
            Para Dewan Guru Serta Pengurus OSIS SMA Negeri Ngoro Menggelar Apel Pagi Di Lapangan 
            Tengah SMA Negeri Ngoro, dalam Hal ini Melibatkan Anggota PASMANERO (Paskib SMAN 
            Ngoro) untuk Memimpin Apel, sedangkan Wakasek Bidang Kesiswaan yang Bertugas Sebagai Pembina Apel. <br/><br/>

            Adapun rangkaian Kegiatan MPLS hari ini Setelah Apel Pagi akan Dilanjutkan dengan
            Pemaparan  Profil Pelajar Pancasila ( 6 Bidang Sasaran) Oleh Bapak Ibu Guru SMA Negeri 
            Ngoro yang Akan Di adakan Di Kelas Masing-Masing GUGUS. Setelah Kegiatan Tersebut 
            Selesai Akan Dilanjutkan Dengan Penyuluhan Kesehatan Remaja yang akan Dilaksanakan di 
            Aula dalam Hal Ini SMA Negeri Ngoro Bekerja sama Dengan Pihak PUKESMAS Ngoro yang 
            Lebih Berkompeten Dalam Bidangnya. <br/><br/>
            
            Pada Setiap hari setelah Kegiatan Selesai akan ada Evaluasi yang Disampaikan Oleh Pengurus 
            OSIS pada Jam Akhir Menjelang Pulang.</p>
            
       </div>
       <div class="vl"></div>
       <div class="headline">
        <img src="/assets//News.png"/>
        <h1> Berita Terbaru</h1>
        <p><a href="#" >Prestasi Lomba-Accounting Competition Universitas Nasional Accounting Fair (UNAF) Tahun 2022 </a><hr class="break-1"/></p>
        <p><a href="#" >Prestasi Lomba-Accounting Competition Universitas Nasional Accounting Fair (UNAF) Tahun 2022 </a><hr class="break-2"/></p>
        <p><a href="#" >Prestasi Lomba-Accounting Competition Universitas Nasional Accounting Fair (UNAF) Tahun 2022 </a></p>
       </div>
    </div>
</body>
</html>
@include('components.Footer')
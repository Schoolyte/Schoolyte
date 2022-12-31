<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="Style/Body.css">
        <title>Dashboard | Schoolyte</title>
    </head>



@include('components.Header')

@yield('Navbar')
<body>
    <div class="Main" style="min-height: 680vh;">
    <div class="intro-top">
    <div class="intro">
        <div class="i-left">
            <div class="i-name">
                <span>WELCOME <br /> TO</span>
                <span class="schoolyte"> Schoolyte</span>
                <span>Dapatkan informasi dan akses berbagai<br />
                    kemudahan dengan Schoolyte</span>
            </div>
        </div>
        <div class="i-right">
            <img src="assets/Asset4.png" class='asset4' />
        </div>
    </div>
        <div class="i-center">
            <span>VISI</span>
            <span>Dapatkan informasi dan akses berbagai kemudahan <br />
                dengan Schoolyte</span>
            <span>MISI</span>
            <span>Menjadi perusahaan yang fokus pada tujuan pondasi <br />
                yang mampu berdaya saing global dan mendapat
                apresiasi secara internasional</span>
            <span>Berperan meningkatkan kualitas hidup pengguna lewat <br />
                layanan digital</span>
            <span>Menyediakan pelayanan dalam sistem integrasi <br />
                dengan sederhana tetapi tetap konsisten.</span>
        </div>
        <div class="i-center2">
            <span>FASILITAS</span>
            <span>Fasilitas yang dapat kamu gunakan</span>

            <div class="perpus">
                <img src="assets/Asset2.png" />
                Perpustakaan
            </div> <div class="lab">
                <img src="assets/Assetlabb.png" />
                Laboratorium
            </div> <div class="tik">
                <img src="assets/Assettik.png" />
                Ruang Komputer
            </div> <div class="lapangan">
                <img src="assets/Asset3.png" />
                Lapangan Olahraga
            </div> <div class="kantin">
                <img src="assets/kantin.png" />
                Kantin
            </div> <div class="uks">
                <img src="assets/uks.png" />
                Ruang Kesehatan
            </div>
        </div>


        <div class='str'>
            <div class='name1'>
                <span> STRUKTUR <br /> ORGANISASI</span>

                <span>Lihat dan ketahui struktur organisasi <br /> terbaru</span>
            </div>
            <a href={{ Route("Strukturorganisasi") }}><button  type="button" class="btn-str">Struktur Organisasi</button>
            <div class='i-right1'>
                <img src="assets/struktur.png" />
            </div>
        </div>
        <div class='icon-rekap'>
            <img src="assets/rekap.png" />
        </div>
        <div class="rekap">
            REKAPITULASI
        </div>
        <div class="row">
            <div class="column">
                <div class="block">
                    <p><img src="assets/people.png"/></p>
                    <h3> 1350 </h3>
                    <p> Siswa </p>
                </div>
            </div>
            <div class="column">
                <div class="block">
                    <p><img src="assets/people.png"/></p>
                    <h3> 40 </h3>
                    <p> Guru </p>
                </div>
            </div>
            <div class="column">
                <div class="block">
                    <p><img src="assets/people.png"/></p>
                    <h3> 15 </h3>
                    <p> Karyawan </p>
                </div>
            </div>
            <div class="column">
                <div class="block">
                    <p><img src="assets/people.png"/></p>
                    <h3> 3 </h3>
                    <p> Jurusan </p>
                </div>
            </div>
            <div class="column">
                <div class="block">
                    <p><img src="assets/people.png"/></p>
                    <h3> 12 </h3>
                    <p> Ekstrakulikuler </p>
                </div>
            </div>
        </div>
        <div class="ppdb">
            <div class="img-ppdb">
                <img src="assets/ppdb.png"/>
            </div>
            <div class="textppdb">
                <span>Ingin Menambahkan Berita?</span>
                <span>Anda dapat menambahkan berita terbaru yang anda ketahui</span>
            </div>
            <a href={{route('Berita/Tambahberita')}}><button type="button" class="btn-PPDB">Tambah Berita</button></a>
            <a href={{route('Berita/Beritasaya')}}><button type="button" class="btn-berita">Berita Saya</button></a>
        </div>
        <div class="activity">
            <h2>Log Activity</h2>
            <div class="activity-feed">

            </div>
        </div>
    </div>
</div>
</body>

</html>
@include('components.Footer')


<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('components.HeaderB', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Glory:wght@800&display=swap');">

        <!-- Bootstrap -->
        <link href="https://fonts.googleapis.com/css2?family=Glory:wght@800&display=swap');">

        <!-- Main CSS-->
        <link href="Style/BodyB.css" rel="stylesheet">
    </head>
    <?php echo $__env->yieldContent('content'); ?>
        <body>
            <div class="introB">
                <div class="i-leftB">
                    <span>Schoolyte</span>
                    <span>Dapatkan informasi dan akses <br/> berbagai kemudahan dengan <br/> Schoolyte</span>
                    <button type="button" class="btn-Login">Login</button>
                </div>
                <div class="i-rightB">
                    <img src="assets/loginnn_1.png" className="img-brnd" />
                </div>
                <div class="i-centerB">
                    <span>FEATURES</span>
                    <span>Beragam fitur yang disediakan oleh Schoolyte untuk membantu <br/>
                        memberikan akses berbagai kemudahan dalam sekolahmu</span>
                    <div class="news"><a href="#">
                        <img src="assets/berita.png" class="img-berita"/>
                        <span class="text1">Berita <br/> Sekolah</span>
                        </a></div>
                    <div class="absen"><a href="#">
                        <img src="assets/Todo List.png" class="img-list"/>
                        <span class="text2">Absensi</span>
                        </a></div>
                    <div class="jadwal-mapel"><a href="#">
                        <img src="assets/Schedule.png" class="img-jadwal"/>
                        <span class="text3">Jadwal <br/> Kelas</span>
                        </a></div>
                    <div class="sch-build"><a href="#">
                        <img src="assets/School Building.png" class="img-sch"/>
                        <span class="text4">Peminjaman <br/> Fasilitas</span >
                        </a></div>
                    <div class="perpus"><a href="#">
                        <img src="assets/Storytelling.png" class="img-perpus"/>
                        <span class="text5">Perpustakaan</span>
                        </a></div>
                    <div class="penilaian"><a href="#">
                        <img src="assets/List View.png" class="img-listview"/>
                        <span class="text6">Penilaian Pembelajaran</span>
                        </a></div>
                    <div class="rapor"><a href="#">
                        <img src="assets/Document.png" class="img-rapor"/>
                        <span class="text7">Rapor</span>
                        </a></div>
                    <div class="siswa-baru"><a href="#">
                        <img src="assets/Schoolboy at a Desk.png" class="img-swbr"/>
                        <span class="text8">Penerimaan <br/> Siswa Baru</span>
                        </a></div>
                    <div class="mutasi-siswa"><a href="#">
                        <img src="assets/Students.png" class="img-mutasi"/>
                        <span class="text9">Mutasi Siswa</span>
                        </a></div>
                    <div class="kantin"><a href="#">
                        <img src="assets/Restaurant On Site.png" class="img-kantin"/>
                        <span class="text10">Kantin</span>
                        </a></div>
                    <div class="kartu_pljr"><a href="#">
                        <img src="assets/Debit Card.png" class="img-kartu"/>
                        <span class="text11">Kartu Pelajar <br/> Digital</span>
                        </a></div>
                    <div class="keuangan"><a href="#">
                        <img src="assets/Cost.png" class="img-keuangan"/>
                        <span class="text12">Keuangan</span>
                        </a></div>
                    <div class="ekskul"><a href="#">
                        <img src="assets/Soccer Player.png" class="img-ekskul"/>
                        <span class="text13">Informasi <br/> Ekstrakurikuler</span>
                        </a></div>
                    <div class="osis"><a href="#">
                        <img src="assets/User Groups.png" class="img-osis"/>
                        <span class="text14">Osis</span>
                        </a></div>
                    <div class="koperasi"><a href="#">
                        <img src="assets/Department Shop.png" class="img-koperasi"/>
                        <span class="text15">Koperasi</span>
                        </a></div>
                </div>
                <div class="tabel-beranda">
                    <span>Informasi Penerimaan Siswa Baru</span>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Jalur Prestasi</th>
                        <th scope="col">Jalur Tes</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row" >Pendaftaran</th>
                        <td>6 Juni - 7 Juli 2022</td>
                        <td>6 Juni - 7 Juli 2022</td>
                        </tr>
                        <tr>
                        <th scope="row">Pelaksanaan Ujian</th>
                        <td>-</td>
                        <td>10 Juli 2022</td>
                        </tr>
                        <tr>
                        <th scope="row">Pengumuman</th>
                        <td>15 Juli 2022</td>
                        <td>15 Juli 2022</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pendaftaran">
                    <div class="a-kiri">
                        <img src="assets/Asset inform 1.png" class="img-daftar"/>
                    </div>
                    <div class="a-kanan">
                        <span>Join With Us</span>
                        <span>Mari bergabung bersama kami dan menjadi peserta didik <br/> yang Beriman, Cerdas, Terampil, Mandiri, dan <br/> Berwawasan Global</span>
                        <button type="button" class="btn-daftar">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </body>
</html>

<?php /**PATH C:\Users\Asus\OneDrive\Desktop\Schoolyte-main\Edco-API\resources\views/Beranda/Beranda.blade.php ENDPATH**/ ?>
import React from "react";
import imgB from '../../assets/loginnn_1.png'
import '../../style/BodyB.css'
import berita from '../../assets/berita.png'
import list from '../../assets/Todo List.png'
import jadwal from '../../assets/Schedule.png'
import sch from '../../assets/School Building.png'
import perpus from '../../assets/Storytelling.png'
import list_view from '../../assets/List View.png'
import rapor from '../../assets/Document.png'
import siswa from '../../assets/Schoolboy at a Desk.png'
import mutasi from '../../assets/Students.png'
import kantin from '../../assets/Restaurant On Site.png'
import kartu_pljr from '../../assets/Debit Card.png'
import keuangan from '../../assets/Cost.png'
import ekskul from '../../assets/Soccer Player.png'
import osis from '../../assets/User Groups.png'
import koperasi from '../../assets/Department Shop.png'
import img_daftar from '../../assets/Asset inform 1.png'

const BodyB= () => {
    return(
        <body>
            <div class="introB">
                <div class="i-leftB">
                    <span>Schoolyte</span>
                    <span>Dapatkan informasi dan akses <br/> berbagai kemudahan dengan <br/> Schoolyte</span>
                    <button type="button" class="btn-Login">Login</button>
                </div>
                <div class="i-rightB">
                    <img src={imgB} className="img-brnd" />
                </div>
                <div class="i-centerB">
                    <span>FEATURES</span>
                    <span>Beragam fitur yang disediakan oleh Schoolyte untuk membantu <br/>
                        memberikan akses berbagai kemudahan dalam sekolahmu</span>
                    <div class="news"><a href="#">
                        <img src={berita} className="img-berita"/>
                        <span class="text1">Berita <br/> Sekolah</span>
                        </a></div>
                    <div class="absen"><a href="#">
                        <img src={list} className="img-list"/>
                        <span class="text2">Absensi</span>
                        </a></div>
                    <div class="jadwal-mapel"><a href="#">
                        <img src={jadwal} className="img-jadwal"/>
                        <span class="text3">Jadwal <br/> Kelas</span>
                        </a></div>
                    <div class="sch-build"><a href="#">
                        <img src={sch} className="img-sch"/>
                        <span class="text4">Peminjaman <br/> Fasilitas</span >
                        </a></div>
                    <div class="perpus"><a href="#">
                        <img src={perpus} className="img-perpus"/>
                        <span class="text5">Perpustakaan</span>
                        </a></div>
                    <div class="penilaian"><a href="#">
                        <img src={list_view} className="img-listview"/>
                        <span class="text6">Penilaian Pembelajaran</span>
                        </a></div>
                    <div class="rapor"><a href="#">
                        <img src={rapor} class="img-rapor"/>
                        <span class="text7">Rapor</span>
                        </a></div>
                    <div class="siswa-baru"><a href="#">
                        <img src={siswa} class="img-swbr"/>
                        <span class="text8">Penerimaan <br/> Siswa Baru</span>
                        </a></div>
                    <div class="mutasi-siswa"><a href="#">
                        <img src={mutasi} class="img-mutasi"/>
                        <span class="text9">Mutasi Siswa</span>
                        </a></div>
                    <div class="kantin"><a href="#">
                        <img src={kantin} class="img-kantin"/>
                        <span class="text10">Kantin</span>
                        </a></div>
                    <div class="kartu_pljr"><a href="#">
                        <img src={kartu_pljr} class="img-kartu"/>
                        <span class="text11">Kartu Pelajar <br/> Digital</span>
                        </a></div>
                    <div class="keuangan"><a href="#">
                        <img src={keuangan} class="img-keuangan"/>
                        <span class="text12">Keuangan</span>
                        </a></div>
                    <div class="ekskul"><a href="#">
                        <img src={ekskul} class="img-ekskul"/>
                        <span class="text13">Informasi <br/> Ekstrakurikuler</span>
                        </a></div>
                    <div class="osis"><a href="#">
                        <img src={osis} class="img-osis"/>
                        <span class="text14">Osis</span>
                        </a></div>
                    <div class="koperasi"><a href="#">
                        <img src={koperasi} class="img-koperasi"/>
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
                        <th scope="row">Pendaftaran</th>
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
                        <img src={img_daftar} class="img-daftar"/>
                    </div>
                    <div class="a-kanan">
                        <span>Join With Us</span>
                        <span>Mari bergabung bersama kami dan menjadi peserta didik <br/> yang Beriman, Cerdas, Terampil, Mandiri, dan <br/> Berwawasan Global</span>
                        <button type="button" class="btn-daftar">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </body>
    )
}
export default BodyB;
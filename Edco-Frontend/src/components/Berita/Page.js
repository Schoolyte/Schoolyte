import React from "react";
import kalender from "../../assets/kalender.png"
import mpls from "../../assets/mpls.png"
import News from '../../assets/News.png'
import plus from '../../assets/plus.png'
import warning from '../../assets/Warning.png'
import Breadcrumb from './Breadcrumb'
import '../../style/Page.css'

const Page=()=>{
    return(
        <div class="news-page">
            <div class="news-tittle">
                <h5>Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</h5>
                <Breadcrumb/>
            </div>
            <div class="row">
                <div class="container-1">
                    <img src={kalender} class="icon-tgl"/>
                    <span class="tanggal">Senin, 16 Juli 2023</span>
                    <img src={mpls} class="img-news"/>
                    <p>Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Bari dan Para Dewan Guru Serta Pengurus 
                        OSIS SMA Negeri Ngoro Menggelar Apel Pagi Di Lapangan Tengah SMA Negeri Ngoro, dalam Hal ini Melibatkan Anggota 
                        PASMANERO (Paskib SMAN Ngoro) untuk Memimpin Apel, sedangkan Wakasek Bidang Kesiswaan yang Bertugas Sebagai Pembina Apel. <br/> <br/>
                        Adapun rangkaian Kegiatan MPLS hari ini Setelah Apel Pagi akan Dilanjutkan dengan Pemaparan  Profil Pelajar Pancasila 
                        ( 6 Bidang Sasaran) Oleh Bapak Ibu Guru SMA Negeri Ngoro yang Akan Di adakan Di Kelas Masing-Masing GUGUS. Setelah
                         Kegiatan Tersebut Selesai Akan Dilanjutkan Dengan Penyuluhan Kesehatan Remaja yang akan Dilaksanakan di Aula 
                        dalam Hal Ini SMA Negeri Ngoro Bekerja sama Dengan Pihak PUKESMAS Ngoro yang Lebih Berkompeten Dalam Bidangnya.<br/> <br/>
                        Pada Setiap hari setelah Kegiatan Selesai akan ada Evaluasi yang Disampaikan Oleh Pengurus OSIS pada Jam Akhir Menjelang Pulang.</p>
                </div>
                <div class="container-2" href="#">
                    <hr class="vl"/>
                    <img src={News} class="icon-news"/>
                    <span class="Headline">Berita Terbaru</span>
                    <div class="p-1">
                        <p >Prestasi Lomba Accounting Competition Universitas Nasional Accounting Fair (UNAF) Tahun 2022</p>
                        <hr class="break"/>
                    </div>
                    <div class="p-2">
                        <p>Prestasi Lomba Accounting Competition Universitas Nasional Accounting Fair (UNAF) Tahun 2022</p>
                        <hr class="break-2"/>
                    </div>
                    <div class="p-3">
                        <p>Prestasi Lomba Accounting Competition Universitas Nasional Accounting Fair (UNAF) Tahun 2022</p>
                    </div>
                    <div class="p-4">
                        <p>Anda dapat menambahkan berita, silahkan klik button dibawah</p>
                    </div>
                    <button type="button" class="add-news" ><img src={plus}/>Add News</button>
                    <div class="konfirmasi">
                        <span><img src={warning}/>&nbsp;Berita anda akan divalidasi oleh admin terlebih dahulu</span>
                        <img src={mpls} class="img-warning"/>
                        <span>Judul Berita</span>
                        <span>Cuplikan isi berita</span>
                    </div>
                </div>
            </div>
        </div>

    )
}
export default Page;
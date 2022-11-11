import React from "react";
import Navbar from '../Home/Navbar';
import Footer from "../Home/Footer";
import mpls from "../../assets/mpls.png";
import '../../style/Newsfix.css'

const Newsfix= () =>{
    return(
        <div class="newsfix">
            <div class="navbar">
                <Navbar/>
            </div>
            <span class="judul-berita">Judul Berita</span>
            <img src={mpls} class="gambar-berita"/>
            <p class="p-6">Selasa 19 Juli 2022 Mengawali Kegiatan MPLS pada Hari Ini Seluruh Peserta Didik Bari dan Para Dewan Guru Serta Pengurus OSIS
                 SMA Negeri Ngoro Menggelar Apel Pagi Di Lapangan Tengah SMA Negeri Ngoro, dalam Hal ini Melibatkan Anggota PASMANERO 
                 (Paskib SMAN Ngoro) untuk Memimpin Apel, sedangkan Wakasek Bidang Kesiswaan yang Bertugas Sebagai Pembina Apel. <br/> <br/>
                Adapun rangkaian Kegiatan MPLS hari ini Setelah Apel Pagi akan Dilanjutkan dengan Pemaparan  Profil Pelajar Pancasila 
                ( 6 Bidang Sasaran) Oleh Bapak Ibu Guru SMA Negeri Ngoro yang Akan Di adakan Di Kelas Masing-Masing GUGUS. 
                Setelah Kegiatan Tersebut Selesai Akan Dilanjutkan Dengan Penyuluhan Kesehatan Remaja yang akan Dilaksanakan 
                di Aula dalam Hal Ini SMA Negeri Ngoro Bekerja sama Dengan Pihak PUKESMAS Ngoro yang Lebih Berkompeten Dalam Bidangnya. <br/><br/>

                Pada Setiap hari setelah Kegiatan Selesai akan ada Evaluasi yang Disampaikan Oleh Pengurus OSIS pada Jam Akhir Menjelang Pulang.</p>
                <div class="footer">
                    <Footer/>
                </div>
     </div>
        
    )
}
export default Newsfix;
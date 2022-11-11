import React from "react";
import logo from '../../assets/logo1.png'
import '../../style/Navbar.css'
import notif from '../../assets/Notification.svg'
import icon from '../../assets/icon.svg'

const Navbar= () => {
  return (
        <header>
          <nav>
          <div class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src={logo} alt="Bootstrap" width="151" height="37"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="menu">
                <li><a href="#">Dasboard</a></li>
                <li><a href="#"> Akademik </a>
                  <ul class="submenu">
                    <li><a href="#">kalender Akademik</a></li>
                    <li><a href="#">Jadwal Kelas</a></li>
                    <li><a href="#">Silabus</a></li>
                    <li><a href="#">Absensi Kehadiran</a>
                        <ul class="submenu2">
                            <li><a href="#">Kelas X</a>
                              <ul class="submenu3">
                                <li><a href="#">X MIPA 1</a></li>
                                <li><a href="#">X MIPA 12</a></li>
                                <li><a href="#">X IPS 1</a></li>
                                <li><a href="#">X IPS 2</a></li>
                              </ul>
                            </li>
                            <li><a href="#">Kelas XI</a>
                              <ul class="submenu3">
                                <li><a href="#">XI MIPA 1</a></li>
                                <li><a href="#">XI MIPA 12</a></li>
                                <li><a href="#">XI IPS 1</a></li>
                                <li><a href="#">XI IPS 2</a></li>
                              </ul>
                            </li>
                            <li><a href="#">Kelas XII</a>
                              <ul class="submenu3">
                                <li><a href="#">XII MIPA 1</a></li>
                                <li><a href="#">XII MIPA 12</a></li>
                                <li><a href="#">XII IPS 1</a></li>
                                <li><a href="#">XII IPS 2</a></li>
                              </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Penilaian pembelajaran</a></li>
                    <li><a href="#">kalender Akademik</a></li>
                    <li><a href="#">Informasi Ujian</a>
                        <ul class="submenu2">
                          <li><a href="#">UTS</a></li>
                          <li><a href="#">UAS</a></li>
                        </ul>
                    </li>
                    <li><a href="#">kalender Akademik</a></li>
                    <li><a href="#">Rapor</a></li>
                  </ul>
                </li>
                <li><a href="#">Peminjaman</a>
                    <ul class="submenu">
                      <li><a href="#">Perpustakaan</a></li>
                      <li><a href="#">Fasilitas</a>
                          <ul class="submenu2">
                            <li><a href="#">Daftar Fasilitas</a></li>
                            <li><a href="#">Peminjaman Fasilitas</a></li>
                          </ul>
                      </li>
                    </ul>
                </li>
                <li><a href="#">Kegiatan Sekolah</a>
                  <ul class="submenu">
                    <li><a href="#">OSIS</a></li>
                    <li><a href="#">Ekstrakulikuler</a></li>
                  </ul>
                </li>
                <li><a href="#">Pembelian</a>
                    <ul class="submenu">
                      <li><a href="#">Koperasi</a></li>
                      <li><a href="#">Kantin</a></li>
                    </ul>
                </li>
                <li><a href="#">Administrasi</a>
                <ul class="submenu">
                  <li><a href="#">Pembayaran SPP</a></li>
                </ul>
                </li>
                <li class="Notif"><a href="#">
                <img src={notif} alt="Notif" width="35" height="35"/>
                </a>
                    <ul class="submenu">
                    <li><a href="#">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</a></li>
                   <li><a href="#">Pembukaan kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</a></li>
                    </ul>
                </li>
            
                <li class="Profil"><a href="#">
                <img src={icon} alt="Profil" width="35" height="35"/>
                </a>
                    <ul class="submenu" bg="dark">
                      <li><a href="#">Profile Saya</a></li>
                      <li><a href="#">Logout</a></li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </div> 
        </nav>
    </header>
  );
};
export default Navbar;
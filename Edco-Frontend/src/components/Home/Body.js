import React from 'react';
import'../../style/Body.css';
import struktur from '../../assets/struktur.png'
import Asset4 from '../../assets/Asset4.png'
import Asset2 from '../../assets/Asset2.png'
import Asset3 from '../../assets/Asset3.png'
import Assetlabb from '../../assets/Assetlabb.png'
import uks from '../../assets/uks.png'
import tik from '../../assets/Assettik.png'
import kantin from '../../assets/kantin.png'
import News from '../../assets/News.png'
import rekap from '../../assets/rekap.png'
import org from '../../assets/people.png'
import Carousel from './/Carousel'
import imgPPDB from '../../assets/ppdb.png'

function NavBar() {
    return (
        <body>
            <div className="intro">
                <div className="i-left">
                    <div className="i-name">
                        <span>WELCOME <br /> TO</span>
                        <span classname="schoolyte"> Schoolyte</span>
                        <span>Dapatkan informasi dan akses berbagai<br />
                            kemudahan dengan Schoolyte</span>
                    </div>
                </div>
                <div className="i-right">
                    <img src={Asset4} className='asset4' />
                </div>
                <div className="i-center">
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
                <div className="i-center2">
                    <span>FASILITAS</span>
                    <span>Fasilitas yang dapat kamu gunakan</span>

                    <div className="perpus">
                        <img src={Asset2} />
                        Perpustakaan
                    </div> <div className="lab">
                        <img src={Assetlabb} />
                        Laboratorium
                    </div> <div className="tik">
                        <img src={tik} />
                        Ruang Komputer
                    </div> <div className="lapangan">
                        <img src={Asset3} />
                        Lapangan Olahraga
                    </div> <div className="kantin">
                        <img src={kantin} />
                        Kantin
                    </div> <div className="uks">
                        <img src={uks} />
                        Ruang Kesehatan
                    </div>
                </div>
                <div className="icon-berita">
                    <img src={News} />

                </div>
                <div className="berita">
                    BERITA
                </div>
                <div>
                    <Carousel/>
                </div>
                <div className='str'>
                    <div className='name1'>
                        <span> STRUKTUR <br /> ORGANISASI</span>

                        <span>Lihat dan ketahui struktur organisasi <br /> terbaru</span>
                    </div>
                    <button type="button" className="btn-str">Struktur Organisasi</button>
                    <div className='i-right1'>
                        <img src={struktur} />
                    </div>
                </div>
                <div className='icon-rekap'>
                    <img src={rekap} />
                </div>
                <div className="rekap">
                    REKAPITULASI
                </div>
                <div className="row">
                    <div className="column">
                        <div className="block">
                            <p><img src={org}/></p>
                            <h3> 1350 </h3>   
                            <p> Siswa </p>
                        </div>
                    </div>
                    <div className="column">
                        <div className="block">
                            <p><img src={org}/></p>
                            <h3> 40 </h3>   
                            <p> Guru </p>
                        </div>
                    </div>
                    <div className="column">
                        <div className="block">
                            <p><img src={org}/></p>
                            <h3> 15 </h3>   
                            <p> Karyawan </p>
                        </div>
                    </div>
                    <div className="column">
                        <div className="block">
                            <p><img src={org}/></p>
                            <h3> 3 </h3>   
                            <p> Juruasan </p>
                        </div>
                    </div>
                    <div className="column">
                        <div className="block">
                            <p><img src={org}/></p>
                            <h3> 12 </h3>   
                            <p> Ekstrakulikuler </p>
                        </div>
                    </div>
                </div>
                <div className="ppdb">
                    <div className="img-ppdb">
                        <img src={imgPPDB}/>
                    </div>
                    <div className="textppdb">
                        <span>PPDB</span>
                        <span>Dapatkan informasi PPDB seputar <br/> siswa baru dan siswa mutasi</span>
                    </div>
                    <button type="button" className="btn-PPDB">informasi PPDB</button>
                </div>
                <div class="activity">
                    <h2>Log Activity</h2>
                    <div class="activity-feed">
                        <div class="feed-item">
                            <div class="date">Sep 25</div>
                            <div class="text">Responded to need <a href="single-need.php">“Volunteer opportunity”</a></div>
                        </div>
                        <div class="feed-item">
                            <div class="date">Sep 24</div>
                            <div class="text">Added an interest “Volunteer Activities”</div>
                        </div>
                        <div class="feed-item">
                            <div class="date">Sep 23</div>
                            <div class="text">Joined the group <a href="single-group.php">“Boardsmanship Forum”</a></div>
                        </div>
                        <div class="feed-item">
                            <div class="date">Sep 21</div>
                            <div class="text">Responded to need <a href="single-need.php">“In-Kind Opportunity”</a></div>
                        </div>
                        <div class="feed-item">
                            <div class="date">Sep 18</div>
                            <div class="text">Created need <a href="single-need.php">“Volunteer Opportunity”</a></div>
                        </div>
                        <div class="feed-item">
                            <div class="date">Sep 17</div>
                            <div class="text">Attending the event <a href="single-event.php">“Some New Event”</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

    );
}

export default NavBar;
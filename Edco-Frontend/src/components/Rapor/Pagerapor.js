import React from "react";
import Navbar from "../Home/Navbar";
import Breadcrumbrapor from "../Rapor/Breadcrumbrapor";
import imgsiswa from '../../assets/img-novi.png'
import dokumen from '../../assets/Document.png'
import gedung from '../../assets/School Building.png'
import Footer from "../Home/Footer";
import '../../style/Pagerapor.css';


const Pagerapor= () =>{
    return(
        <div class="rapor">
             <div class="navbar">
                <Navbar/>
            </div>
            <div class="page-tittle1">
                <h5 class="tittle1">Rapor </h5>
                <Breadcrumbrapor/>
            </div>
            <div class="identitas">
                <img src={imgsiswa}/>
                <h5>Novi Rosidhatul Aulia</h5>
                <h1>X MIPA 1</h1>
            </div>
            <div class="rapor-place">
                <div class="rapor-ganjil">
                    <img src={dokumen}/>
                    <span>Rapor Semester Ganjil</span>
                </div>
                <button type="button" class="btn-lihat1" value="lihat">Lihat</button>
                <button type="button" class="btn-download1" value="Download!">Download</button>
                <div class="rapor-genap">
                    <img src={dokumen}/>
                    <span>Rapor Semester Genap</span>
                </div>
                <button type="button" class="btn-lihat2" value="lihat">Lihat</button>
                <button type="button" class="btn-download2" value="Download!">Download</button>
                
            </div>
            <button type="button" class="btn-kelas-X" ><img src={gedung} class="icon-btn1"/>&nbsp;Kelas X</button>
            <button type="button" class="btn-kelas-XI" ><img src={gedung} class="icon-btn2"/>&nbsp;Kelas XI</button>
            <button type="button" class="btn-kelas-XII" ><img src={gedung} class="icon-btn3"/>&nbsp;Kelas XII</button>
            <div class="Footer">
                <Footer/>
            </div>
        </div>
       
    )
}
export default Pagerapor;
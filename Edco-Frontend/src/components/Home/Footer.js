import React from "react";
import logo from '../../assets/logo1.png'
import '../../style/Footer.css'
import map from '../../assets/Place Marker.png'
import copy from '../../assets/Copyright.png'
import contact from '../../assets/telpon.png'
import mail from '../../assets/Mail.png'
import imgfooter from '../../assets/imgfooter.png'


const Footer = () => {
    return(
        <footer>
        <div class="footer">
                    
                <div class="box">   
                        <div class="boxed">   
                            <span>~Enjoy Your School With Schoolyte~</span>
                            <img src={imgfooter} className="imgfooter"  alt="logo" />
                        </div>
                </div>
                        
                <div class="footer-body">         
                <div class="footer-col">
                        <div class="footer-logo">
                            <img src={logo} className="logo-img "  alt="logo" />
                        </div>
                        </div>
                    
                <div>   
                <div class="footer-col">
                <img src={map}  class="icon-map"/>
                        <div class="footer-text">
                     
                        <span>Gedung A10 Teknik Informatika, <br/> 
                                            Universitas Negeri Surabaya <br/>
                                            Ketintang, Gayungan, Surabaya</span>
                        </div>
                        </div>
                    
                    
                    <img src={contact} class="icon-contact"/>
                    <img src={mail} class="icon-email"/>
                    </div>
                    <div class="footer-col">
                    <img src={copy} class="icon-copy"/>
                        <div class="footer-text2"> 
                        <span class="material-symbols-outlined">Copyright Schoolyte 2022</span>
                        </div>
                    </div>
                    <div class="kontak">
                    <div class="footer-col">
                            <span>Kontak Kami</span>   <br></br><br/>
                            
                            <span>0321  855461</span>   <br></br> <br/>
                            
                            <span>schoolyte@gmail.com</span>
                    </div>
                    </div>
                    </div>
            <div>
        </div>
        </div>
        </footer>
    )
}
export default Footer;
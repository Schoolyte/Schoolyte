import React from "react";
import logo from '../../assets/logo1.png'
import '../../style/NavbarB.css'

const NavbarB= () => {
   return(
    <header>
    <nav class="navbar">
        <div class="navbar navbar-expand-lg">
            <div class="container-fluidB">
            <a class="navbar-brand" href="#">
            <img src={logo} className="Logo-img "  alt="logo" />
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="menu-beranda">
                <li><a class="nav-brd" href="#">Beranda</a></li>
                <li><a class="nav-brd" href="#">Kontak</a></li>
                <button type="button" class="btn-login">Login</button>
                </ul>
            </div>
            </div>
        </div>
    </nav>
</header>
   )
}
export default NavbarB;
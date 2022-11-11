import React from 'react';
import logo from '../../assets/logo1.png'
import uiImg from '../../assets/login1.png'
import '../../style/Login.css';


const Login = () => {
    return (
    <div>
        <img src={logo} className="logo-img "  alt="logo" />
     
        <form className="LoginForm">
            
            <div class="title">   
                LOGIN
            </div>

            <div class="label">   
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID/NIS/NIP</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan ID/NIS/NIP anda"></input>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" maxlength="8" placeholder="Masukkan password anda"></input>
            </div>
            </div>
            <button type="button" class="btn-login">Login</button>
           
        </form>
        <img src={uiImg} className='login-img' alt=" " />
    </div>
);
};

export default Login;
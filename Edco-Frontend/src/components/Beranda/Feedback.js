import React from "react";
import checklist from '../../assets/checklist.png'
import '../../style/Feedback.css'

const Feedback= () =>{
    return(
        <div class="feedback">
            <img src={checklist} class="icon-feedback" />
            <h1>Pendaftaran anda telah berhasil, silahkan tunggu informasi lebih lanjut di email anda!</h1>
            <button type="button" class="btn-back">Kembali</button>
            <div class="kosong"></div>
        </div>
    )
}
export default Feedback;
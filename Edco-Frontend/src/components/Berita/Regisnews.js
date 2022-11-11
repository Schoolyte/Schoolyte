import React from "react";
import '../../style/Regisnews.css'


const Regisnews= ()=>{
    return(
        <div class="regisnews">
            <div class="page-tittle">
                <span>TAMBAH BERITA</span>
            </div>
            <div class="command">
                <span>Silahkan input berita anda disini!</span>
            </div>
            <div class="form-regisnews">
                <form class="addnews-form">
                    <div class="label">   
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label1">News tittle</label>
                            <textarea class="cat1 form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label2">News Content</label>
                            <textarea class="cat2 form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label3">Post Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1"></input>
                        </div>
                </div>
                </form>
                <input class="btn-deliver" type="submit" value="Submit"></input>
            </div>
        </div>
    )
}
export default Regisnews;
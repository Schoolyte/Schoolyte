<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Style/Pendaftaran.css">
</head>
<body>
    <div class="container">
        <div class="regis">
            <span>Formulir penerimaan siswa baru</span>
            <span>Silahkan isi form berikut dengan data yang benar!</span>
        </div>
        <div class="from-pendaftaran">
            <form class="Regisform">
                <div class="label">
                    <div class="nama ">
                        <label for="exampleInputText" class="form1 form-label">Nama Lengkap Siswa</label>
                        <input type="text" class="ctrl1 form-control" id="exampleInputText"  placeholder="Masukkan nama lengkap anda "></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form2 form-label">Nomor Induk Siswa (NIS)</label>
                        <input class="ctrl2 form-control" id="exampleInputNumber"  placeholder="Masukkan nomor induk siswa"></input>
                        <div class="form-text"></div>
                    </div>
                    <label for="exampleSelect" class="form3 form-label">Jenis Kelamin</label>
                    <select class="select form-select" aria-label="Default select example">
                        <option selected>Jenis Kelamin :</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputDate" class="form4 form-label">Tanggal Lahir</label>
                        <input type="date" class="ctrl4 form-control" id="exampleInputDate"  placeholder="Masukkan nomor induk siswa"></input>
                        <div class="form-date"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form5 form-label">Agama</label>
                        <input class="ctrl5 form-control" id="exampleInputNumber"  placeholder="Masukkan Agama Anda"></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form6 form-label">Alamat Lengkap</label>
                        <input class="ctrl6 form-control" id="exampleInputNumber"  placeholder="Masukkan alamat lengkap anda"></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form7 form-label">Nama Sekolah Asal</label>
                        <input class="ctrl7 form-control" id="exampleInputNumber"  placeholder="Masukkan nama sekolah asal anda"></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form8 form-label">Nama Ayah</label>
                        <input class="ctrl8 form-control" id="exampleInputNumber"  placeholder="Masukkan nama ayah"></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form9 form-label">Nama Ibu</label>
                        <input class="ctrl9 form-control" id="exampleInputNumber"  placeholder="Masukkan nama ibu"></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form10 form-label">Nomor Telepon Ayah/Ibu</label>
                        <input class="ctrl10 form-control" id="exampleInputNumber"  placeholder="Masukkan nomor telepon aktif "></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="email mb-3 ">
                        <label for="exampleInputText" class="form11 form-label">Email</label>
                        <input type="email" class="ctrl11 form-control" id="exampleInputNumber"  placeholder="Masukkan email anda "></input>
                        <div class="form-text"></div>
                    </div>
                    <div id="Help" class="form12 form-text">*Pastikan data yang dimasukkan sudah benar dan klik Submit</div>
                    <button type="submit" class="btn-submit">submit</button>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>

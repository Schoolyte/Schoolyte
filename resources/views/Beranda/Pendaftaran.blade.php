<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penerimaan Siswa Baru | Schoolyte</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href={{asset('Style/Pendaftaran.css')  }}>
</head>
<body>
    <div class="container">
        <div class="regis">
            <span>Formulir Penerimaan Siswa Baru</span>
            <span>Silahkan Isi Form Berikut dan Upload Dokumen Dengan Data Yang Benar!</span>
        </div>
        <div class="from-pendaftaran">
            <form action="/Beranda/Pendaftaran/store" method="POST" class="Regisform">
                @csrf
                <div class="label">
                    <div class="nama">
                        <label for="exampleInputText" class="form1 form-label">Nama Lengkap Siswa</label>
                        <input name="NAMA_PENDAFTAR" type="text" class="ctrl1 form-control" id="Nama"  placeholder="Masukkan Nama Lengkap Anda "required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form2 form-label">Nomor Induk Siswa Nasional (NISN)</label>
                        <input name="NISN_PENDAFTAR" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="ctrl2 form-control" id="NISN"  placeholder="Masukkan Nomor Induk Siswa Nasional Anda" required maxlength="10"></input>
                        <div class="form-text"></div>
                    </div>
                    <label for="exampleSelect" class="form3 form-label">Jenis Kelamin</label>
                    <select name="JENIS_KELAMIN_PENDAFTAR" class="select form-select" aria-label="Default select example"  id="JK" required>
                        <option selected>Jenis Kelamin :</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="f1 form-label">Tempat Lahir</label>
                        <input name="TEMPAT_LAHIR_PENDAFTAR" class="c1 form-control" id="T4L"  placeholder="Masukkan Tempat Lahir Anda"required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputDate" class="form4 form-label">Tanggal Lahir</label>
                        <input name="TANGGAL_LAHIR_PENDAFTAR" type="date" class="ctrl4 form-control" id="TL"  placeholder="Masukkan Tanggal Lahir Anda"required></input>
                        <div class="form-date"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form5 form-label">Nama Orang Tua/Wali</label>
                        <input name="NAMA_ORTU_PENDAFTAR"class="ctrl5 form-control" id="NamaOrtu"  placeholder="Masukkan Nama Orang Tua/Wali Anda"required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form6 form-label">Alamat Lengkap</label>
                        <input name="ALAMAT_LENGKAP_PENDAFTAR" class="ctrl6 form-control" id="Alamat"  placeholder="Masukkan Alamat Lengkap Anda"required></input>
                        <div class="form-text"></div>
                    </div>

                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form9 form-label">Agama</label>
                        <input name="AGAMA_PENDAFTAR" class="ctrl9 form-control" id="Agama"  placeholder="Masukkan Agama Anda"required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="email mb-3 ">
                        <label for="exampleInputText" class="form11 form-label">Email</label>
                        <input name="EMAIL_PENDAFTAR" type="text" class="ctrl11 form-control" id="Email"  placeholder="Masukkan Email Anda "required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="suket mb-3 ">
                        <label for="exampleInputText" class="form12 form-label">Ijazah SMP</label>
                        <input name="IJAZAH_SMP_PENDAFTAR" type="file" class="ctrl12 form-control" id="Ijazah" accept="application/pdf"  placeholder=" "required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="suket mb-3 ">
                        <label for="exampleInputText" class="form13 form-label">Akte Kelahiran</label>
                        <input name="AKTE_PENDAFTAR"type="file" class="ctrl13 form-control" id="Akte" accept="application/pdf"  placeholder=" " required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="suket mb-3 ">
                        <label for="exampleInputText" class="form14 form-label">Kartu Keluarga (KK)</label>
                        <input name="KK_PENDAFTAR" type="file" class="ctrl14 form-control" id="KK" accept="application/pdf"  placeholder=" " required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="Keterangan">
                    <span class="kata1">*Scan ijazah asli SMP</span>
                    <span class="kata2">*Scan akte kelahiran asli</span>
                    <span class="kata3">*Scan kartu keluarga asli</span>
                    </div>
                </div>
                <button href="" type="submit" class="btn-submit" onclick="validasi()" required>Submit</button>
                <div class="form-popup" id="myForm">

                    <div class="identitas">
                        <img src="/assets/Group293.png" alt="" class="img-feedback">
                        <h1>Pendaftaran anda telah berhasil, silahkan tunggu informasi lebih lanjut di email anda!</h1>
                        <a href=""><button type="button" class="btn-cancel" onclick="closeForm()">Kembali</button></a>

                    </div>
            </form>

                </div>
        </div>
        <div class="indent">
                test
            </div>
    </div>
    <script type="text/javascript">
        function sweet (){
        swal("Peringatan", "Isi Terlebih Dahulu Form Dengan Lengkap","error")
        }
         function validasi() {
                var nama = document.getElementById("Nama").value;
                var nama = document.getElementById("NISN").value;
                var nama = document.getElementById("JK").value;
                var nama = document.getElementById("T4L").value;
                var nama = document.getElementById("TL").value;
                var nama = document.getElementById("NamaOrtu").value;
                var nama = document.getElementById("Alamat").value;
                var nama = document.getElementById("Email").value;
                var nama = document.getElementById("Ijazah").value;
                var nama = document.getElementById("Akte").value;
                var nama = document.getElementById("KK").value;

                if (nama != "") {
                    return openForm();
                }else{
                    sweet();
                }
            }
            </script>
            <script>

                function openForm() {
                document.getElementById("myForm").style.display = "block";

                }

                function closeForm() {
                    document.getElementById("").style.display = "block";
                }

            </script>
</body>
</html>

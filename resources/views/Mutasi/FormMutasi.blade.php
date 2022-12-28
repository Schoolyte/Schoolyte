<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("Style/FormMutasi.css") }}>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Form Mutasi Keluar | Schoolyte</title>
</head>
<body>
    <div class="form-mutasi">
        <div class="mutasikeluar" style="min-height: 200vh;">
            <span>Formulir Mutasi Keluar</span>
            <span>Silahkan Isi Form Berikut dan Upload Dokumen Dengan ata yang benar!</span>
        </div>
        <div class="from-pendaftaran">
            <form action="FormMutasi/store" method="POST" class="Regisform">
                @csrf
                <div class="label">
                    <div class="nama ">
                        <label for="exampleInputText" class="form1 form-label">Nama Lengkap Siswa</label>
                        <input name="NAMA_MUTASI" type="text" class="ctrl1 form-control" id="exampleInputText"  placeholder="Masukkan nama lengkap anda " required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form2 form-label">Nomor Induk Siswa (NIS)</label>
                        <input name="NISN_MUTASI" type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"class="ctrl2 form-control" id="exampleInputNumber"  placeholder="Masukkan nomor induk siswa" required  maxlength="11"></input>
                        <div class="form-text"></div>
                    </div>
                    <label for="exampleSelect" class="form3 form-label">Jenis Kelamin</label>
                    <select name="JENIS_KELAMIN_MUTASI"class="select form-select" aria-label="Default select example" required>
                        <option selected>Jenis Kelamin :</option>
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="f1 form-label">Tempat Lahir</label>
                        <input name="TEMPAT_LAHIR_MUTASI" class="c1 form-control" id="exampleInputNumber"  placeholder="Masukkan Tempat Lahir Anda" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputDate" class="form4 form-label">Tanggal Lahir</label>
                        <input name="TEMPAT_LAHIR_MUTASI" type="date" class="ctrl4 form-control" id="exampleInputDate"  placeholder="Masukkan nomor induk siswa" required></input>
                        <div class="form-date"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form5 form-label">Nama Orang Tua/Wali</label>
                        <input name="NAMA_ORTU_MUTASI" class="ctrl5 form-control" id="exampleInputNumber"  placeholder="Masukkan Agama Anda" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form6 form-label">Alamat Lengkap</label>
                        <input name="ALAMAT_LENGKAP_MUTASI" class="ctrl6 form-control" id="exampleInputNumber"  placeholder="Masukkan alamat lengkap anda" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form7 form-label">Sekolah tujuan</label>
                        <input name="SEKOLAH_TUJUAN"class="ctrl7 form-control" id="exampleInputNumber"  placeholder="Sekolah Tujuan" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form8 form-label">Kelas</label>
                        <input name="KELAS_MUTASI" class="ctrl8 form-control" id="exampleInputNumber"  placeholder="Kelas (ketika pindah)" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputText" class="form9 form-label">Agama    </label>
                        <input name="AGAMA_MUTASI"class="ctrl9 form-control" id="exampleInputNumber"  placeholder="Agama" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="email mb-3 ">
                        <label for="exampleInputText" class="form11 form-label">Email</label>
                        <input name="EMAIL_MUTASI" type="email" class="ctrl11 form-control" id="exampleInputNumber"  placeholder="Masukkan email anda " required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="suket mb-3 ">
                        <label for="exampleInputText" class="form12 form-label">Surat Keterangan Pindah</label>
                        <input name="SUKET_PINDAH_MUTASI" type="file" class="ctrl12 form-control" id="exampleInputNumber" accept="application/pdf"  placeholder=" " required></input>
                        <div class="form-text"></div>
                    </div>

                </div>
                <button type="submit" class="btn-submit" onclick="validasi()">Submit</button>
            </form>

                <div class="form-popup" id="myForm">

                    <div class="identitas">
                        <img src="/assets/Group293.png" alt="" class="img-feedback">
                        <h1>Mutasi keluar yang anda ajukan telah berhasil, silahkan tunggu informasi lebih lanjut di email anda!</h1>
                        <a href={{route('Mutasi/MutasiKeluar')}}><button type="button" class="btn-cancel" onclick="closeForm()">Kembali</button></a>

                    </div>
                </div>
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
        var nama = document.getElementById("SekolahTujuan").value;
        var nama = document.getElementById("Kelas").value;
        var nama = document.getElementById("Agama").value;
        var nama = document.getElementById("Email").value;
        var nama = document.getElementById("SuketPin").value;



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

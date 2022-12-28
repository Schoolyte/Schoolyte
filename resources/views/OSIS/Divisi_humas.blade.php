<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href={{ asset("Style/Devisi_humas.css") }}>
    <title>Humas Osis | Schoolyte</title>
</head>
<body>
    @include('components.Header ')
@yield('Navbar')
    <div class="devisi-humas" style="min-height: 400vh;">
    <div class="tittle-page">
            <span>OSIS (Organisasi Siswa Intra Sekolah)</span>
            <ul class="breadcrumb">
              <li><a href="#">Kegiatan Sekolah</a></li>
              <li><a href={{ route('OSIS/OSIS')}}>OSIS</a></li>
              <li>Informasi Osis</li>
            </ul>
        </div>
        <span class="judul">INFORMASI OSIS</span>
        <div class="erol">
            <span>Divisi Humas</span>
            <span>Dapatkan informasi dan akses berbagai kemudahan dengan Schoolyte</span>
        </div>
        <div class="pendaftaran">
            <span>Daftar OSIS</span>
            <span>Untuk menjadi bagian dari OSIS ini, anda harus mendaftar terlebih dahulu</span>
            <button type="" class="btn-daftar" onclick="openForm()">Daftar Disini !!</button>
            <div class="form-popup" id="myForm">
                <h1>Tuliskan alasan anda ingin menjadi bagian dari OSIS !!</h1>
                <div class="identitas">
                    <span>Nama  : Novi Rosidhatul Aulia</span>
                    <span>NISN&nbsp;&nbsp;  : 123456789</span>
                    <span>Kelas&nbsp; : X MIPA 1</span>
                    <form  class="form-container">


                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alasan mengikuti</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alasan anda"></textarea>
                        </div>


                    </form>
                    <a href="#"><button type="submit" class="btn-submit"  >submit</button></a>

                </div>
                <button type="button" class="btn-cancel"  onclick="closeForm()">X</button>
            </div>
        </div>
        <div class="erol1">
            <span>Program Kerja</span>
            <span>Dapatkan informasi dan akses berbagai kemudahan dengan Schoolyte</span>

        </div>
        <div class="proker">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama Program Kerja</th>
                <th scope="col">Status</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">6</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">7</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">8</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">9</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
                <tr>
                <th scope="row">10</th>
                <td>Nama Program Kerja</td>
                <td></td>

                </tr>
            </tbody>
        </table>
        </div>
        <div class="dokumentasi">

            <span>Dokumentasi</span>
            <span>Berikut adalah dokumentasi program kerja divisi Humas yang sudah terlaksana</span>
            <img class="img-dok"src="/assets/image 15.png" alt="" sizes="" srcset="" style="position: absolute; left: 94px; top: 2522px; border-radius: 10px;">
            <li ><a href="#">Kegiatan Bakti Sosial </a></li>

        </div>
        <div class="keterangan">
            <li ><a>Pada tahun 2022 Schoolyte  telah meraih juara 1 lomba paskibra tingkat nasional yang diadakan di Jakarta, Indonesia </a></li>
        </div>
    </div>

    <script>
      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
      </script>
</body>
</html>
@include('components.Footer')

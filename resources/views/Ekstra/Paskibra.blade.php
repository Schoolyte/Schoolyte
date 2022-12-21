<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="Style/Paskibra.css">
    <title>Document</title>
</head>
<body>
@yield('Navbar')
    <div class="paskibra">
    <div class="tittle-page">
            <span>Informasi Ekstrakurikuler</span>
            <ul class="breadcrumb">
              <li><a href="#">Kegiatan Sekolah</a></li>
              <li><a href="/Page_ekskul">Ekstrakulikuler</a></li>
              <li>Informasi Ekstrakurikuler</li>
            </ul>
        </div>
        <span class="judul">Informasi Ekstrakurikuler</span>
        <div class="deskripsi">
            <span>PASKIBRA</span>
            <span>Pada tahun 2022
                Schoolyte  telah meraih juara 1 
                lomba paskibra a tingkat nasional 
                yang diadakan di Jakarta, Indonesia</span>
            <span>Jadwal : Hari Kamis (15.00-17.00)</span>
        </div>
        <div class="pendaftaran">
            <span>Daftar Ekstrakurikuler</span>
            <span>Untuk mengikuti ekstrakurikuler ini, anda harus mendaftar terlebih dahulu</span>
            <button type="" class="btn-daftar" onclick="openForm()">Daftar Disini !!</button>
            <div class="form-popup" id="myForm">
                <h1>Tuliskan alasan anda mengikuti ekstrakurikuler ini !!</h1>
                <div class="identitas">
                    <span>Nama  : Novi Rosidhatul Aulia</span>
                    <span>NISN&nbsp;&nbsp;  : 123456789</span>
                    <span>Kelas&nbsp; : X MIPA 1</span>
                    <form action="" class="form-container">
                    
                
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alasan mengikuti</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alasan anda"></textarea>
                        </div>
                
                        <button type="submit" class="btn-submit" >submit</button>
                    </form>
                    
                    
                </div>
                <button type="button" class="btn-cancel"  onclick="closeForm()">X</button>
            </div>  
        </div>
        <div class="daftar-anggota">
            <img src="/assets/img-siswa.png" alt="" srcset="">
            <span>Supriyadi, S.pd.</span>
            <span>Guru Pembina Paskibra</span>            
            <div class="tabel-anggota">
            <table id="example" class="display" style=" width: 847px;height: 661px; " >
                <thead>
                    <tr>
                        <th>Nama Anggota</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                       
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                       
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                       
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                       
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                       
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                    <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                    <tr>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>123456789</td>
                        <td>XI MIPA 2</td>
                        
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Anggota</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                       
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
        <div class="prestasi-ekskul">
            <span>Prestasi Yang Diraih</span>
            <span>JUARA 1 PASKIBRA TINGKAT NASIONAL</span>
            <span>Pada tahun 2022 Schoolyte  telah meraih 
                juara 1 lomba paskibra a tingkat nasional yang diadakan di Jakarta, Indonesia</span>
            <img src="/assets/image 15.png" alt="" sizes="" srcset="">
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
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
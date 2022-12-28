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
    <link rel="stylesheet" href="Style/PPguru.css">
    <title>Document</title>
</head>
<body>
@yield('Navbar')
    <div class="penilaian-guru" style="min-height: 210vh;">
        <div class="tittle-page">
            <span>Penilaian Pembelajaran</span>
            <ul class="breadcrumb">
              <li><a href="#">Akademik</a></li>
              <li>Penilaian Pembelajaran</li>
            </ul>
        </div>
        <div class="warning">
            <span>Anda dapat melihat dan memantau nilai belajar seluruh siswa</span>
            <span>• Nilai terdiri dari nilai tugas hingga nilai ujian</span>
        </div>
        <div class="penilaian-place">
        <div class="pagination-jadwal" id="tabel-penilaian">
            <table id="example" class="display" style=" width: 850px;height: 800px; " >
                <thead>
                    <tr>
                        <th>N0</th>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hanifahtul Fa`iqoh</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                       
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                       
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                       
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Novi Rosidhatul Auliar</td>
                        <td>20051214035</td>
                       
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                       
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Darell Timotius Suhartono</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Novi Rosidhatul Aulia</td>
                        <td>20051214035</td>
                        
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Hanifahtul Fa`iqoh</td>
                        <td>20051214035</td>
                        
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>N0</th>
                        <th>Nama Guru</th>
                        <th>NIP</th>
                       
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn4 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas X
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="content4 dropdown-content">
              <div class="content">
                <li><a href="#tabel-penilaian">X MIPA 1</a></li>
                <li><a href="#tabel-penilaian">X MIPA 2</a></li>
                <li><a href="#tabel-penilaian">X IPS 1</a></li>
                <li><a href="#tabel-penilaian">X IPS 2</a></li>
              </div>  
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn5 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas XI
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="content5 dropdown-content">
              <div class="content">
                <li><a href="#tabel-penilaian">XI MIPA 1</a></li>
                <li><a href="#tabel-penilaian">XI MIPA 2</a></li>
                <li><a href="#tabel-penilaian">XI IPS 1</a></li>
                <li><a href="#tabel-penilaian">XI IPS 2</a></li>
              </div>  
            </div>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn3 active" role="button"><img src="/assets/School Building.png" width="35" height="35" /> Kelas XII
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="content3 dropdown-content">
              <div class="content">
                <li><a href="#tabel-penilaian">XII MIPA 1</a></li>
                <li><a href="#tabel-penilaian">XII MIPA 2</a></li>
                <li><a href="#tabel-penilaian">XII IPS 1</a></li>
                <li><a href="#tabel-penilaian">XII IPS 2</a></li>
              </div>  
            </div>
          </div>
        </div>

    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
@include('components.Footer')
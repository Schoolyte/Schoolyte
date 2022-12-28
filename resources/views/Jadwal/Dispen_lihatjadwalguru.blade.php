<!DOCTYPE html>
<html lang="en">
    @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="Style/Pagination.css">
    <title>Document</title>
</head>
<body>
    @yield('Navbar')
    <div class="jadwal-guru" style="min-height: 250vh;">
        <div class="tittle-page">
            <span>Jadwal Kelas</span>
            <ul class="breadcrumb">
              <li><a href="#jadwal">Akademik</a></li>
              <li>Jadwal Kelas</li>
            </ul>
        </div>
        <span class="guru">Jadwal Mengajar Guru</span>
        <div class="pagination-jadwal">
            <table id="example" class="display" style=" width: 1230px;height: 820px; " >
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
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
@include('components.Footer')

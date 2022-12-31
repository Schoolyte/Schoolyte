<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapor Ganjil | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Munculrapor.css") }}>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="view-rapor">
        <div class="page-tittle1">
            <h5 class="tittle1">Rapor </h5>
            <ul class="breadcrumb">
                <li><a href="#">Akademik</a></li>
                <li><a href="#">Rapor</a></li>
                <li>{{ (Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa)->kelas->nama_kelas }}</li>
              </ul>
        </div>
        <div class="identitas">
            <img src="/assets/img-siswa.png"/>
            <h1>{{ (Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa)->nama }}</h1>
            <span>{{ (Auth::guard('siswa')->user() ?? Auth::guard('walisiswa')->user()->siswa)->kelas->nama_kelas }}</span>
        </div>
        <div class="warning">
            <span>Pantau hasil belajarmu di rapot tiap semester!</span>
            <h1>• Anda dapat memantau nilai belajar setiap tingkatan kelas yang terbagi dalam rapot tiap semester</h1>
        </div>
        <div class="table-rapor">
            <div id="GFG">
                <div class="tittle-rapor"> <h2>Semester Ganjil</h2>
                </div>

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>

                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Pengetahuan</th>
                        <th scope="col">Keterampilan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $r1 = 0;
                            $r2 = 0;
                        @endphp
                        @foreach ($nilai as $k => $item)
                        @php
                            $r1 += (@$item->tugas1 + @$item->tugas2 + @$item->tugas3 + @$item->uts + @$item->uas) / 5;
                            $r2 += (@$nilaip[$k]->tugas1 + @$nilaip[$k]->tugas2 + @$nilaip[$k]->tugas3 + @$nilaip[$k]->praktikum1 + @$nilaip[$k]->praktikum2) / 5;
                        @endphp
                        <tr>
                            <th scope="row">{{ $item->mapel->mapel }}</th>
                            <th scope="row">{{ $item->tugas1 }}</th>
                            <th scope="row">{{ $nilaip[$k]->tugas1 }}</th>
                        </tr>
                        @endforeach
                    </tbody>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Rata - rata</th>
                            <th scope="col">{{ $r1 / count($nilai) }}</th>
                            <th scope="col">{{ $r2 / count($nilai) }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
                <button type="button" aria-label="print" class="btn-active" onclick="printDiv()">Cetak</button>
        </div>

    </div>


    <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</body>
</html>

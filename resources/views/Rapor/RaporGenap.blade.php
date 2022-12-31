<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapor Genap | Schoolyte</title>
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
                <div class="tittle-rapor"> <h2>Semester Genap</h2>
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
                      <tr>
                        <th scope="row">Tugas 1</th>
                        <th scope="row">{{ @$nilai->tugas1 }}</th>
                        <th scope="row">{{ @$nilaip->tugas1 }}</th>
                      </tr>
                      <tr>
                        <th scope="row">Tugas 2</th>
                        <th scope="row">{{ @$nilai->tugas2 }}</th>
                        <th scope="row">{{ @$nilaip->tugas2 }}</th>
                      </tr>
                      <tr>
                        <th scope="row">Tugas 3</th>
                        <th scope="row">{{ @$nilai->tugas3 }}</th>
                        <th scope="row">{{ @$nilaip->tugas3 }}</th>
                      </tr>
                      <tr>
                        <th scope="row">UTS</th>
                        <th scope="row">{{ @$nilai->uts }}</th>
                        <th scope="row">{{ @$nilaip->praktikum1 }}</th>
                      </tr>
                      <tr>
                        <th scope="row">UAS</th>
                        <th scope="row">{{ @$nilai->uts }}</th>
                        <th scope="row">{{ @$nilaip->praktikum2 }}</th>
                      </tr>
                    </tbody>
                    <thead class="thead-dark">
                      <tr>

                        <th scope="col">Rata - rata</th>
                        <th scope="col">{{ (@$nilai->tugas1 + @$nilai->tugas2 + @$nilai->tugas3 + @$nilai->uts + @$nilai->uas) / 5 }}</th>
                        <th scope="col">{{ (@$nilaip->tugas1 + @$nilaip->tugas2 + @$nilaip->tugas3 + @$nilaip->praktikum1 + @$nilaip->praktikum2) / 5 }}</th>
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

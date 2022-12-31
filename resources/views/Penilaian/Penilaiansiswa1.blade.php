<!DOCTYPE html>
<html lang="en">
  @include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
    <title>Penilaian Pembelajaran | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Penilaiansiswa1.css") }}>
    <style>
      .table {
        top: auto;
        position: relative;
        left: auto;
        width: auto;
        height: auto;
      }
    </style>
</head>
<body>
  @yield('Navbar')
    <div class="page-penilaian" style="min-height: 300vh;">
      <div class="tittle-page">
        <span>Penilaian Pembelajaran</span>
        <ul class="breadcrumb">
          <li><a href="#">Akademik</a></li>
          <li>Penilaian Pembelajaran</li>
        </ul>
      </div>
      <div class="identitas-siswa">
        <img src="/assets/img-siswa.png">
        <h1>{{ $siswa->nama }}</h1>
        <span>{{ $siswa->kelas->nama_kelas }}</span>
      </div>

      <div class="Penilaian-place" id="penilaian">
        <div style="position: relative; width: 100%; padding: 3rem;">
          <div class="fs-2 mb-4">
            Semester 1
          </div>
          <div class="fs-4 mb-4">
            Nilai
          </div>
          <table class="table table-hover" style="width: 100%;">
            <thead class="thead-dark">
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Tugas 1</th>
              <th scope="col">Tugas 2</th>
              <th scope="col">Tugas 3</th>
              <th scope="col">UTS</th>
              <th scope="col">UAS</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($nilaiS1 as $item)
                    <tr>
                        <td>{{ $item->mapel->mapel }}</td>
                        <td>{{ $item->tugas1 }}</td>
                        <td>{{ $item->tugas2 }}</td>
                        <td>{{ $item->tugas3 }}</td>
                        <td>{{ $item->uts }}</td>
                        <td>{{ $item->uas }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div class="fs-4 mb-4">
            Keterampilan
          </div>
          <table class="table table-hover" style="width: 100%;">
            <thead class="thead-dark">
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Tugas 1</th>
              <th scope="col">Tugas 2</th>
              <th scope="col">Tugas 3</th>
              <th scope="col">Praktikum 1</th>
              <th scope="col">Praktikum 2</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($nilaiS1P as $item)
                    <tr>
                        <td>{{ $item->mapel->mapel }}</td>
                        <td>{{ $item->tugas1 }}</td>
                        <td>{{ $item->tugas2 }}</td>
                        <td>{{ $item->tugas3 }}</td>
                        <td>{{ $item->praktikum1 }}</td>
                        <td>{{ $item->praktikum2 }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div class="fs-2 mb-4">
            Semester 2
          </div>
          <div class="fs-4 mb-4">
            Nilai
          </div>
          <table class="table table-hover" style="width: 100%;">
            <thead class="thead-dark">
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Tugas 1</th>
              <th scope="col">Tugas 2</th>
              <th scope="col">Tugas 3</th>
              <th scope="col">UTS</th>
              <th scope="col">UAS</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($nilaiS2 as $item)
                    <tr>
                        <td>{{ $item->mapel->mapel }}</td>
                        <td>{{ $item->tugas1 }}</td>
                        <td>{{ $item->tugas2 }}</td>
                        <td>{{ $item->tugas3 }}</td>
                        <td>{{ $item->uts }}</td>
                        <td>{{ $item->uas }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div class="fs-4 mb-4">
            Keterampilan
          </div>
          <table class="table table-hover" style="width: 100%;">
            <thead class="thead-dark">
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Tugas 1</th>
              <th scope="col">Tugas 2</th>
              <th scope="col">Tugas 3</th>
              <th scope="col">Praktikum 1</th>
              <th scope="col">Praktikum 2</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($nilaiS2P as $item)
                    <tr>
                        <td>{{ $item->mapel->mapel }}</td>
                        <td>{{ $item->tugas1 }}</td>
                        <td>{{ $item->tugas2 }}</td>
                        <td>{{ $item->tugas3 }}</td>
                        <td>{{ $item->praktikum1 }}</td>
                        <td>{{ $item->praktikum2 }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>

      @foreach ($arrKelas as $kelas)
        <div>
            <img class="icon-btn1" src="/assets/School Building.png" width="35" height="35" padding="5" style="position: relative"/>
            <a href="?kelasId={{ $kelas->id }}" type="button" class="btn-kelas-X" style="position: relative; text-decoration: none"> &nbsp; {{ $kelas->nama_kelas }}</a>
        </div>
      @endforeach
    </div>
</body>
</html>
@include('components.Footer')

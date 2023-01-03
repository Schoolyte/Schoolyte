<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Munculrapor.css") }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .section-card {
        position: absolute;
        width: 1005px;
        height: auto;
        left: 352px;
        top: 600px;
        background: #F6F6F6;
        border-radius: 15px;
        display: flex;
    }
    .table {
        position: relative;
        width: 100%;
        height: auto;
        left: auto;
        top: auto;

        background: #ffffff;
        box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
    }
    </style>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    @isset($jadwal)
        <div class="page-tittle1">
            <h5 class="tittle1">Input Nilai </h5>
            <ul class="breadcrumb">
                <li><a href="#">Guru</a></li>
                <li><a href="">Input Nilai</a></li>
                <li><a href="">Pilih Siswa</a></li>
            </ul>
        </div>
        <div class="section-card" style="top: 600px;">
            <div style="position: relative; width: 100%; padding: 3rem;">
                {{-- <div>
                    <a href="{{ route('admin.dashboard.crud-nilai.create') }}" class="btn btn-primary">Tambah</a>
                </div> --}}
                <div class="fs-2 mb-4">
                    Siswa dalam {{ $jadwal->kelas->nama_kelas }} - {{ $jadwal->mapel->mapel }}
                </div>
                <table class="table table-hover" style="width: 100%;">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">...</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal->kelas->siswas as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('guru.dashboard.crud-nilai.create', ['jadwal_id' => $jadwal->id, 'siswa_id' => $item->id]) }}" class="btn btn-warning">Input Nilai</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="view-rapor">
            <div class="page-tittle1">
                <h5 class="tittle1">Crud Nilai </h5>
                <ul class="breadcrumb">
                    <li><a href="#">Admin</a></li>
                    <li><a href="">Crud Nilai</a></li>
                    <li><a href="">Pilih Kelas</a></li>
                </ul>
            </div>
            <div class="section-card" style="top: 600px;">
                <div style="position: relative; width: 100%; padding: 3rem;">
                    {{-- <div>
                        <a href="{{ route('admin.dashboard.crud-nilai.create') }}" class="btn btn-primary">Tambah</a>
                    </div> --}}
                    <div class="fs-2 mb-4">
                        Kelas Anda
                    </div>
                    <table class="table table-hover" style="width: 100%;">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Mapel</th>
                            <th scope="col">...</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwals as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kelas->nama_kelas }}</td>
                                    <td>{{ $item->mapel->mapel }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('guru.dashboard.crud-nilai.index', ['jadwal_id' => $item->id]) }}" class="btn btn-warning">Input Nilai Siswa</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endisset
</body>
</html>

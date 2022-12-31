<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapor Ganjil | Schoolyte</title>
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
    <div class="view-rapor">
        <div class="page-tittle1">
            <h5 class="tittle1">Crud Siswa </h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Crud Siswa</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 600px;">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <div>
                    <a href="{{ route('admin.dashboard.crud-siswa.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <table class="table table-hover" style="width: 100%;">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Absen</th>
                        {{-- <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Status</th> --}}
                        <th scope="col">...</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($siswas as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->no_absen }}</td>
                            {{-- <td>{{ $item->alamat }}</td>
                            <td>{{ $item->tlpn }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tempat_lahir }}</td>
                            <td>{{ $item->tgl_lahir }}</td>
                            <td>{{ $item->agama }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>{{ $item->status }}</td> --}}
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.dashboard.crud-siswa.edit', [$item->id]) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.dashboard.crud-siswa.destroy', [$item->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

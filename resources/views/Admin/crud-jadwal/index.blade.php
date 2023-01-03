<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Kelas | Schoolyte</title>
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
            <h5 class="tittle1">Jadwal Kelas</h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Jadwal Kelas</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <div>
                    <a href="{{ route('admin.dashboard.crud-jadwal.create') }}" class="btn btn-primary" style="margin-bottom:20px;background-color:#F24E1A ;border:none">Tambah</a>
                </div>
                <table class="table table-hover" style="width: 100%; text-align:center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Kelas ID</th>
                        <th scope="col">Mapel ID</th>
                        <th scope="col">Guru ID</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam</th>

                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($jadwals as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kelas->nama_kelas }}</td>
                            <td>{{ $item->mapel->mapel }}</td>
                            <td>{{ $item->guru->nama }}</td>
                            <td>{{ $item->hari }}</td>
                            <td>{{ $item->jam }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.dashboard.crud-jadwal.edit', [$item->id]) }}" class="btn btn-warning" style="margin-left:70px">Edit</a>
                                    <form action="{{ route('admin.dashboard.crud-jadwal.destroy', [$item->id]) }}" method="POST">
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

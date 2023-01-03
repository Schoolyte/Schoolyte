<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan Masuk | Schoolyte</title>
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
            <h5 class="tittle1">Pesanan Masuk</h5>
            <ul class="breadcrumb">
                <li><a href="#">Pegawai Kantin</a></li>
                <li><a href="">Pesanan Masuk</a></li>
            </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <table class="table table-hover" style="width: 100%; text-align:center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Stand ID</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pesanans as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->stand_id }}</td>
                            <td>{{ $item->siswa->nama ?? '-' }}</td>
                            <td>{{ $item->guru->nama ?? '-' }}</td>
                            <td>{{ $item->total_harga }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    @if ($item->status == 'pending')
                                    <a href="{{ route('pkantin.dashboard.pesanan-masuk.index', ['action' => 'konfirmasi', 'id' => $item->id]) }}" class="btn btn-success" style="margin-left:550px">Konfirmasi</a>
                                    @endif
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

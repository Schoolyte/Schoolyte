<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Topup dan Tarik Saldo | Schoolyte</title>
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
            <h5 class="tittle1">Topup dan Tarik Saldo </h5>
            <ul class="breadcrumb">
                <li><a href="#">Pegawai</a></li>
                <li><a href="">Topup dan Tarik Saldo</a></li>
            </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <table class="table table-hover" style="width: 100%; text-align:center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Status</th>
                        <th scope="col">Saldo</th>
                        <th scope="col">Waktu / Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($topups as $item)
                        @php
                            $user_nama = '-';
                            $role = '-';
                            if ($item->role == 'siswa')  {
                                $user_nama = @\App\Models\Siswa::find($item->user_id)->nama ?? '-';
                                $role = 'Siswa';
                            }
                            if ($item->role == 'guru')  {
                                $user_nama = @\App\Models\Guru::find($item->user_id)->nama ?? '-';
                                $role = 'Guru';
                            }
                            if ($item->role == 'pegawaikantin')  {
                                $user_nama = @\App\Models\PegawaiKantin::find($item->user_id)->nama ?? '-';
                                $role = 'Pegawai Kantin';
                            }
                        @endphp
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $role }} / {{ $user_nama }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y H:i') }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    @if ($item->status === 'belum konfirmasi')
                                        <a href="{{ route('pegawai.dashboard.topup', ['action' => 'konfirmasi', 'id' => $item->id]) }}" class="btn btn-sm btn-success" style="background-color:#F24E1A ;border:none">Konfirmasi</a>
                                    @endif
                                    <a href="{{ route('pegawai.dashboard.topup.detail', [$item->id]) }}" class="btn btn-sm btn-success" style="background-color:#F24E1A ;border:none">Detail</a>
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

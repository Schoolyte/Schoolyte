<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Transaksi | Schoolyte</title>
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
@php
    $user_nama = '-';
    if ($topup->role == 'siswa')  $user_nama = @\App\Models\Siswa::find($topup->user_id)->nama ?? '-';
    if ($topup->role == 'guru')  $user_nama = @\App\Models\Guru::find($topup->user_id)->nama ?? '-';
@endphp
<body>
    <div class="view-rapor">
        <div class="page-tittle1">
            <h5 class="tittle1">Detail Transaksi </h5>
            <ul class="breadcrumb">
                <li><a href="#">Pegawai</a></li>
                <li><a href="#">Topup dan Tarik Saldo</a></li>
                <li><a href="#">Detail Transaksi</a></li>
            </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <div class="d-flex gap-4">
                    <div class="mb-4 col">
                        <label class="mb-2">ID</label>
                        <input type="text" class="form-control" value="{{ $topup->id }}" disabled>
                    </div>
                    <div class="mb-4 col">
                        <label class="mb-2">User</label>
                        <input type="text" class="form-control" value="{{ $user_nama }}" disabled>
                    </div>
                </div>
                <div class="d-flex gap-4">
                    <div class="mb-4 col">
                        <label class="mb-2">Tipe</label>
                        <input type="text" class="form-control" value="{{ $topup->type }}" disabled>
                    </div>
                    <div class="mb-4 col">
                        <label class="mb-2">Saldo</label>
                        <input type="text" class="form-control" value="{{ $topup->amount }}" disabled>
                    </div>
                    <div class="mb-4 col">
                        <label class="mb-2">Status</label>
                        <input type="text" class="form-control" value="{{ $topup->status }}" disabled>
                    </div>
                </div>
                <div class="d-flex gap-4">
                    <div class="mb-4 col">
                        <label class="mb-2">Waktu</label>
                        <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($topup->created_at)->format('d M Y H:i:s') }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

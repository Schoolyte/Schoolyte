<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Wali Kelas | Schoolyte</title>
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
    </style>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="view-rapor">
        <div class="page-tittle1">
            <h5 class="tittle1">Edit Wali Kelas </h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Wali Kelas</a></li>
                <li><a href="">Edit</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <form action="{{ route('admin.dashboard.crud-wali.update', [$walisiswa->id]) }}" method="POST" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="mb-2">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $walisiswa->nama ?? '' }}">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $walisiswa->email ?? '' }}">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Password</label>
                        <input type="text" name="pass" class="form-control" value="{{ $walisiswa->pass ?? '' }}">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Nomor Telepon</label>
                        <input type="text" name="tlpn" class="form-control" value="{{ $walisiswa->tlpn ?? '' }}">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Pilih Siswa</label>
                        <select name="siswa_id" class="form-control">
                            @foreach ($siswas as $item)
                                @if ($item->id === $walisiswa->siswa_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success" style="background-color:#F24E1A ;border:none">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

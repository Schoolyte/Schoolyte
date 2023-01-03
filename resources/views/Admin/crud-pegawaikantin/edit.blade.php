<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pegawai Kantin | Schoolyte</title>
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
            <h5 class="tittle1">Edit Pegawai Kantin </h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Pegawai Kantin</a></li>
                <li><a href="">Edit</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <form action="{{ route('admin.dashboard.crud-pegawaikantin.update', [$pegawaikantin->id]) }}" method="POST" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $pegawaikantin->nama }}">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ $pegawaikantin->email }}">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Password</label>
                            <input type="text" name="pass" class="form-control" value="{{ $pegawaikantin->pass }}">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $pegawaikantin->alamat }}">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Telepon</label>
                            <input type="text" name="tlpn" class="form-control" value="{{ $pegawaikantin->tlpn }}">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                @if ($pegawaikantin->jenis_kelamin == "L")
                                    <option value="L" selected>Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                @else
                                    <option value="L">Laki-Laki</option>
                                    <option value="P" selected>Perempuan</option>
                                @endif
                            </select>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="{{ $pegawaikantin->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" class="form-control" value="{{ $pegawaikantin->tgl_lahir }}">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Agama</label>
                            <input type="text" name="agama" class="form-control" value="{{ $pegawaikantin->agama }}">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Status</label>
                            <select name="status" class="form-control">
                                @if ($pegawaikantin->status == "aktif")
                                    <option value="aktif" selected>Aktif</option>
                                    <option value="non-aktif">Non-Aktif</option>
                                @else
                                    <option value="aktif">Aktif</option>
                                    <option value="non-aktif" selected>Non-Aktif</option>
                                @endif
                            </select>
                        </div>
                        <div class="col"></div>
                    </div>
                    <button class="btn btn-success" style="background-color:#F24E1A ;border:none">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

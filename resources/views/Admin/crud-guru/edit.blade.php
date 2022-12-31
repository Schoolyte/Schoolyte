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
    </style>
</head>
@include('components.Header ')
@yield('Navbar')
<body>
    <div class="view-rapor">
        <div class="page-tittle1">
            <h5 class="tittle1">Edit Guru </h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Crud Guru</a></li>
                <li><a href="">Edit</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 600px;">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <form action="{{ route('admin.dashboard.crud-guru.update', [$guru->id]) }}" method="POST" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Nama</label>
                            <input type="text" name="nama" class="form-control" value={{ $guru->nama }}>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Email</label>
                            <input type="text" name="email" class="form-control" value={{ $guru->email }}>
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">alamat</label>
                            <input type="text" name="alamat" class="form-control" value={{ $guru->alamat }}>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">tlpn</label>
                            <input type="text" name="tlpn" class="form-control" value={{ $guru->tlpn }}>
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">nip</label>
                            <input type="text" name="nip" class="form-control" value={{ $guru->nip }}>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">jenis kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" value={{ $guru->jenis_kelamin }}>
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">tempat lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value={{ $guru->tempat_lahir }}>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">tgl lahir</label>
                            <input type="text" name="tgl_lahir" class="form-control" value={{ $guru->tgl_lahir }}>
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">agama</label>
                            <input type="text" name="agama" class="form-control" value={{ $guru->agama }}>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Password</label>
                            <input type="text" name="pass" class="form-control" value={{ $guru->pass }}>
                        </div>
                    </div>
                    <button class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

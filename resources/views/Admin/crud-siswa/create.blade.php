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
            <h5 class="tittle1">Tambah Siswa </h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Crud Siswa</a></li>
                <li><a href="">Tambah</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 600px;">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <form action="{{ route('admin.dashboard.crud-siswa.store') }}" method="POST" class="p-4">
                    @csrf
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Nama Kelas</label>
                            <select name="kelas_id" class="form-control">
                                @foreach ($kelass as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Password</label>
                            <input type="text" name="pass" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">No Absen</label>
                            <input type="text" name="no_absen" class="form-control">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Telepon</label>
                            <input type="text" name="tlpn" class="form-control">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">NIS</label>
                            <input type="text" name="nis" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" class="form-control">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Agama</label>
                            <input type="text" name="agama" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex gap-4">
                        <div class="mb-4 col">
                            <label class="mb-2">Semester</label>
                            <input type="text" name="semester" class="form-control">
                        </div>
                        <div class="mb-4 col">
                            <label class="mb-2">Status</label>
                            <select name="status" class="form-control">
                                <option value="aktif">Aktif</option>
                                <option value="non-aktif">Non-Aktif</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

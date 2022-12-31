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
            <h5 class="tittle1">Tambah Jadwal</h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Crud Jadwal</a></li>
                <li><a href="">Tambah</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 600px;">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <form action="{{ route('admin.dashboard.crud-jadwal.store') }}" method="POST" class="p-4">
                    @csrf
                    <div class="mb-4">
                        <label class="mb-2">Nama Kelas</label>
                        <select name="kelas_id" class="form-control">
                            @foreach ($kelass as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Nama Mapel</label>
                        <select name="mapel_id" class="form-control">
                            @foreach ($mapels as $item)
                                <option value="{{ $item->id }}">{{ $item->mapel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Nama Guru</label>
                        <select name="guru_id" class="form-control">
                            @foreach ($gurus as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Hari</label>
                        <input type="text" name="hari" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Jam</label>
                        <input type="text" name="jam" class="form-control">
                    </div>

                    <button class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
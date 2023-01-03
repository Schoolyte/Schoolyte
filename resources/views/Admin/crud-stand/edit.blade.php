<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Stand | Schoolyte</title>
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
            <h5 class="tittle1">Edit Stand </h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Stand</a></li>
                <li><a href="">Edit</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <form action="{{ route('admin.dashboard.crud-stand.update', [$stand->id]) }}" method="POST" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="mb-2">Nama Stand</label>
                        <input type="text" name="nama_stand" class="form-control" value="{{ $stand->nama_stand }}">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Jenis Stand</label>
                        <input type="text" name="jenis_stand" class="form-control" value="{{ $stand->jenis_stand }}">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Kode Stand</label>
                        <input type="text" name="kode_stand" class="form-control" value="{{ $stand->kode_stand }}">
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Pegawai Kantin</label>
                        <select name="p_kantin_id" class="form-control">
                            @foreach ($pkantins as $item)
                                @if ($item->id == $stand->p_kantin_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">Image Stand</label>
                        <input type="text" name="image" class="form-control" value="{{ $stand->image ?? 'https://picsum.photos/200/300' }}">
                    </div>

                    <button class="btn btn-success"  style="background-color:#F24E1A ;border:none">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

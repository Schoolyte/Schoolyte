<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Menu | Schoolyte</title>
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
            <h5 class="tittle1">Tambah Menu </h5>
            <ul class="breadcrumb">
                <li><a href="#">Pegawai Kantin</a></li>
                <li><a href="">Menu Kantin</a></li>
                <li><a href="">Tambah</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <form action="{{ route('pkantin.dashboard.crud-menu.store') }}" method="POST" class="p-4">
                    @csrf
                    <div class="mb-4 col">
                        <label class="mb-2">Nama Stand</label>
                        <select name="stand_id" class="form-control">
                            @foreach ($stands as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_stand }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="stand_id" class="form-control"> --}}
                    </div>
                    <div class="mb-4 col">
                        <label class="mb-2">Nama Menu</label>
                        <input type="text" name="nama_menu" class="form-control">
                    </div>
                    <div class="mb-4 col">
                        <label class="mb-2">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="mb-4 col">
                        <label class="mb-2">Image</label>
                        <input type="text" name="image" class="form-control">
                    </div>

                    <button class="btn btn-success" style="background-color:#F24E1A ;border:none">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

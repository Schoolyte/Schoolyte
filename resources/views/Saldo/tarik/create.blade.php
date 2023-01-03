<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarik Saldo | Schoolyte</title>
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
            <h5 class="tittle1">Tarik Saldo</h5>
            <ul class="breadcrumb">
                <li>
                    <a href="#">
                        @auth('siswa')
                            Siswa
                        @endauth
                        @auth('guru')
                            Guru
                        @endauth
                    </a>
                </li>
                <li><a href="">Tarik Saldo</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <div>
                    <div class="mb-4 col ">
                        <label class="mb-2">Saldo Anda</label>
                        <input type="text" class="form-control" value="{{ $user->saldo }}" disabled>
                    </div>
                </div>

                @auth('siswa')
                    <form action="{{ route('Tarik-saldo.store', ['siswa']) }}" method="POST" class="">
                        @csrf
                        <div class="mb-4 col">
                            <label class="mb-2">Jumlah Tarik Saldo</label>
                            <input type="text" name="amount" class="form-control">
                        </div>

                        <button class="btn btn-success" style="background-color:#F24E1A ;border:none">Simpan</button>
                    </form>
                @endauth

                @auth('guru')
                    <form action="{{ route('Tarik-saldo.store', ['guru']) }}" method="POST" class="">
                        @csrf
                        <div class="mb-4 col">
                            <label class="mb-2">Jumlah Tarik Saldo</label>
                            <input type="text" name="amount" class="form-control">
                        </div>

                        <button class="btn btn-success" style="background-color:#F24E1A ;border:none">Simpan</button>
                    </form>
                @endauth

                @auth('pegawaikantin')
                    <form action="{{ route('Tarik-saldo.store', ['pegawaikantin']) }}" method="POST" class="">
                        @csrf
                        <div class="mb-4 col">
                            <label class="mb-2">Jumlah Tarik Saldo</label>
                            <input type="text" name="amount" class="form-control">
                        </div>

                        <button class="btn btn-success" style="background-color:#F24E1A ;border:none">Simpan</button>
                    </form>
                @endauth
            </div>
        </div>

        <div class="section-card" style="top: 900px; left:250px;padding: 20px;">
            <h2>Riwayat</h2>
        </div>
        <div class="section-card" style="top: 1000px; left:250px">
            <table class="table table-hover" style="width: 100%;text-align:center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Jumlah Tarik Saldo</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($riwayats as $item)
                        <tr>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

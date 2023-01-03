<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stand | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Munculrapor.css") }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
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
            <h5 class="tittle1">Stand </h5>
            <ul class="breadcrumb">
                <li><a href="#">Admin</a></li>
                <li><a href="">Stand</a></li>
              </ul>
        </div>
        <div class="section-card" style="top: 500px; left:250px">
            <div style="position: relative; width: 100%; padding: 3rem;">
                <div>
                    <a href="{{ route('admin.dashboard.crud-stand.create') }}" class="btn btn-primary" style="margin-bottom:20px;background-color:#F24E1A ;border:none">Tambah</a>
                </div>
                <table class="table table-hover" style="width: 100%; text-align:center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">QRCODE</th>
                        <th scope="col">Nama Stand</th>
                        <th scope="col">Jenis Stand</th>
                        <th scope="col">Kode Stand</th>
                        <th scope="col">Pegawai Kantin</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($stands as $item)
                        <tr class="stand">
                            <td>{{ $item->id }}</td>
                            <td><div id="qrcode{{ $item->id }}" style="width: 100%; margin-left:20px;"></div></td>
                            <td>{{ $item->nama_stand }}</td>
                            <td>{{ $item->jenis_stand }}</td>
                            <td>{{ $item->kode_stand }}</td>
                            <td>{{ $item->p_kantin_id }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.dashboard.crud-stand.edit', [$item->id]) }}" class="btn btn-warning" style="margin-left:45px;">Edit</a>
                                    <form action="{{ route('admin.dashboard.crud-stand.destroy', [$item->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        const stands = document.querySelectorAll('.stand');
        stands.forEach(stand => {
            const id = stand.querySelector('td').innerText;
            const qrcode = new QRCode(`qrcode${id}`, {
                text: `{{ asset('') }}Menu/${id}`,
                width: 64,
                height: 64,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            })
            console.log(`{{ asset('') }}Menu/${id}`);
        })
    </script>
</body>
</html>

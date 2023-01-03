<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/crud-perpus.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Manage Buku</title>
</head>
@include('components.Header ')
@yield('Navbar')

<body>
    <div class="main" style="min-height: 300vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
                <li><a href="#">Peminjaman</a></li>
                <li>Perpustakaan</li>
            </ul>
        </div>
        <h1>Buku</h1>
        <a href={{ route('PegawaiPerpus/FormTambahBuku') }}><button type="submit" class="btn-plus"><i
                    class="fa fa-plus" style="font-size:20px"></i>
                Tambah </button></a>

        <div class="container">
            <table class="table align-middle table-warning" style="max-width: 85%">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Buku</th>
                        <th>Deskripi</th>
                        <th>Kategori</th>
                        <th>Jumlah Buku</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td style="width: 105px">
                                <div class="my-auto">
                                    <img src="{{ asset('storage/Buku/' . $item->image) }}" width="100px"
                                        alt="" />
                                </div>
                            </td>
                            <td>{{ $item->nama_buku }}</td>
                            <td>{{ $item->rincian_buku }}</td>
                            <td>{{ $item->kategori_buku }}</td>
                            <td>{{ $item->jumlah_buku }}</td>
                            @if ($item->jumlah_buku > 0)
                                <td>Tersedia</td>
                            @else
                                <td>TidakTersedia</td>
                            @endif
                            <td>
                                <a href="/manageBuku/{{ $item->id }}/edit" class="btn btn-warning" id="edit">
                                    Edit
                                </a>
                                <form action="/manageBuku/{{ $item->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Hapus" onclick="return confirm('Apakah anda yakin?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
@include('components.Footer')

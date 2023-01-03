<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ URL::asset('Style/FormPinjamBuku.css') }}">
    <title>Peminjaman Buku</title>
</head>
@include('components.Header ')
@yield('Navbar')

<body>
    <div class="main" style="min-height: 200vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
                <li><a href="#">Peminjaman</a></li>
                <li>Perpustakaan</li>
            </ul>
        </div>
        <h1>Pinjam Buku</h1>
        <div class="pinjaman">
            <img src="{{ asset('storage/Buku/' . $buku->image) }}" alt="" class="img-buku">
            <div class="nama-buku">Nama Buku : {{ $buku->nama_buku }}</div>
            <div class="penulis">Penulis : {{ $buku->nama_penulis }}</div>
            <div class="tahun">Tahun Terbit : {{ $buku->tahun_terbit }}</div>
            <span class="rincian">Rincian Buku : <p>{{ $buku->rincian_buku }}</p></span>
            <div class="kategori">Kategori : {{ $buku->kategori_buku }}</div>
        </div>
        @if ($buku->jumlah_buku > 0)
            <form action="/storePinjam" method="post">
                @csrf
                <div class="formp">
                    <input name="idBuku" value="{{ $buku->id }}" type="hidden"></input>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputDate" class="label1 form-label">Tanggal Pinjam
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                        <input name="tglPinjam" type="date" class="tgl1 form-control" id="TL"
                            placeholder="Masukkan nomor induk siswa"></input>
                        <div class="form-date"></div>
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="exampleInputDate" class="label2 form-label">Tanggal Pengembalian
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                        <input name="tglKembali" type="date" class="tgl2 form-control" id="TL"
                            placeholder="Masukkan nomor induk siswa"></input>
                        <div class="form-date"></div>
                    </div>
                    <span class="label3">Jumlah Buku
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                    </span>
                    <div class="number">
                        <span class="minus">-</span>
                        <input type="text" class="kurleb" name="jumlah" value="0" />
                        <span class="plus">+</span>
                    </div>
                    <button type="submit" class="btn-pinjam">Pinjam</button>
                    <a href="#"><button type="submit" class="btn-batal">Batal</button></a>
                </div>
            </form>
        @else
            <div class="formp">
                <h3 class="text-center mt-4">Mohon maaf buku ini sedang Tidak tersedia</h3>
            </div>
        @endif
    </div>
    <script>
        $(document).ready(function() {
            $('.minus').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) + 1;
                $input.val(count);
                $input.change();
                return false;
            });
        });
    </script>
</body>

</html>
@include('components.Footer')

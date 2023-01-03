<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/PeminjamanBuku.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
@include('components.Header ')
@yield('Navbar')

<body>
    <div class="main" style="min-height: 700vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
                <li><a href="#">Peminjaman</a></li>
                <li>Perpustakaan</li>
            </ul>
        </div>
        <h1>Peminjaman Buku</h1>
        <div class="navbartab">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Menunggu</button>
                <button class="tablinks" onclick="openTab(event, 'Tab2')">Dipinjam</button>
                <button class="tablinks" onclick="openTab(event, 'Tab3')">Kembali</button>
                <button class="tablinks" onclick="openTab(event, 'Tab4')">Selesai</button>
                <button class="tablinks" onclick="openTab(event, 'Tab5')">Telat</button>
                <button class="tablinks" onclick="openTab(event, 'Tab6')">Kehilangan</button>
            </div>

            <div id="Tab1" class="tabcontent show active">
                <div class="isi1">
                    <div class="container">
                        <div class="row">
                            @foreach ($bukuMenungguKonfirmasi as $item)
                                <div class="card m-3">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                                    class="img-buku">
                                            </div>
                                            <div class="col-md-4">
                                                <h2>{{ $item->nama }}</h2>
                                                <span class="badge text-bg-warning">status : siswa</span>
                                                <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                                <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }}</h5>
                                                <h5>Tanggal Kembali : {{ $item->tgl_kembali }}</h5>
                                                <h5>Jumlah Buku : {{ $item->jumlah }}</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h4>ID Peminjaman : {{ $item->id }}</h4>
                                                <div class="mb-2">
                                                    <span class="badge text-bg-secondary">Menunggu Konfirmasi</span>
                                                </div>
                                                <form action="/konfirmasiPinjam" method="post">
                                                    @csrf
                                                    <input type="hidden" name="idPeminjaman"
                                                        value="{{ $item->id }}">
                                                    <button type="submit"
                                                        onclick="return confirm('Apakah anda yakin?')"
                                                        class="btn btn-success">Konfirmasi</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tab2" class="tabcontent">
                <div class="isi1">
                    <div class="container">
                        <div class="row">
                            @foreach ($bukuDipinjam as $item)
                                <div class="card m-3">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                                    class="img-buku">
                                            </div>
                                            <div class="col-md-4">
                                                <h2>{{ $item->nama }}</h2>
                                                <span class="badge text-bg-warning">status : siswa</span>
                                                <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                                <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }}</h5>
                                                <h5>Tanggal Kembali : {{ $item->tgl_kembali }}</h5>
                                                <h5>Jumlah Buku : {{ $item->jumlah }}</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h4>ID Peminjaman : {{ $item->id }}</h4>
                                                <div class="mb-2">
                                                    <span class="badge text-bg-warning">{{ $item->status }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tab3" class="tabcontent">
                <div class="isi1">
                    <div class="container">
                        <div class="row">
                            @foreach ($bukuDikembalikan as $item)
                                <div class="card m-3">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                                    class="img-buku">
                                            </div>
                                            <div class="col-md-4">
                                                <h2>{{ $item->nama }}</h2>
                                                <span class="badge text-bg-warning">status : siswa</span>
                                                <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                                <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }}</h5>
                                                <h5>Tanggal Kembali : {{ $item->tgl_kembali }}</h5>
                                                <h5>Jumlah Buku : {{ $item->jumlah }}</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h4>ID Peminjaman : {{ $item->id }}</h4>
                                                <div class="mb-2">
                                                    <span class="badge text-bg-secondary">{{ $item->status }}</span>
                                                </div>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#pengembalian{{ $item->id }}">
                                                    Konfirmasi Pengembalian
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="pengembalian{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="pengembalianLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form id="formPengembalian" action="/konfirmasiPengembalianBuku"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="{{ asset('storage/Buku/' . $item->image) }}"
                                                                alt="" class="img-buku-modal">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>ID Peminjaman : {{ $item->id }}</p>
                                                            <p>Nama Buku : {{ $item->nama_buku }}</p>
                                                            <p>Tanggal Pinjam : {{ $item->tgl_pinjam }}</p>
                                                            <p>Tanggal Kembali : {{ $item->tgl_kembali }}</p>
                                                            <p>Jumlah Buku : {{ $item->jumlah }}</p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="{{ $item->id }}"
                                                        name="idPeminjaman">
                                                    <div class="my-3">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Dikembalikan</label>
                                                        <input type="text" class="form-control"
                                                            id="exa mpleInputEmail1" aria-describedby="emailHelp"
                                                            readonly name="pengembalian" value="{{ $tglSekarang }}">
                                                    </div>
                                                    <?php
                                                    $today = strtotime($tglSekarang);
                                                    $kembali = strtotime($item->tgl_kembali);
                                                    $telat = 0;
                                                    $sanksi = 0;

                                                    if ($kembali < $today) {
                                                        $tglKembali = new DateTime($item->tgl_kembali);
                                                        $tglNow = new DateTime($tglSekarang);
                                                        $interval = $tglKembali->diff($tglNow);
                                                        $telat = abs($interval->d);
                                                        $sanksi = $telat * 5000;
                                                    }

                                                    ?>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Telat</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            readonly name="telat" value="{{ $telat }}"> hari
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Status</label>
                                                        <select class="form-select"
                                                            aria-label="Default select example" name="status">
                                                            <option selected value="Selesai">Selesai</option>
                                                            <option value="Hilang">Hilang</option>
                                                            <option value="Telat">Telat</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" name="sanksi"
                                                            class="form-label">Sanksi
                                                            (Rp.)
                                                        </label>
                                                        <input type="number" class="form-control"
                                                            value="{{ $sanksi }}" name="sanksi">
                                                    </div>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="btn-pengembalian"
                                                        form="formPengembalian" class="btn btn-warning">Kirim</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tab4" class="tabcontent">
                <div class="isi1">
                    <div class="container">
                        <div class="row">
                            @foreach ($bukuSelesai as $item)
                                <div class="card m-3">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                                    class="img-buku">
                                            </div>
                                            <div class="col-md-4">
                                                <h2>{{ $item->nama }}</h2>
                                                <span class="badge text-bg-warning">status : siswa</span>
                                                <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                                <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }}</h5>
                                                <h5>Tanggal Kembali : {{ $item->tgl_kembali }}</h5>
                                                <h5>Jumlah Buku : {{ $item->jumlah }}</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h4>ID Peminjaman : {{ $item->id }}</h4>
                                                <div class="mb-2">
                                                    <span class="badge text-bg-warning">{{ $item->status }}</span>
                                                </div>
                                                <h4 class="fw-bold mb-2">Selesai Pada</h4>
                                                <div class="mb-2">
                                                    <span
                                                        class="badge text-bg-danger p-4">{{ $item->pengembalian }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tab5" class="tabcontent">
                <div class="isi1">
                    <div class="container">
                        <div class="row">
                            @foreach ($bukuTelat as $item)
                                <div class="card m-3">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                                    class="img-buku">
                                            </div>
                                            <div class="col-md-4">
                                                <h2>{{ $item->nama }}</h2>
                                                <span class="badge text-bg-warning">status : siswa</span>
                                                <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                                <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }}</h5>
                                                <h5>Tanggal Kembali : {{ $item->tgl_kembali }}</h5>
                                                <h5>Jumlah Buku : {{ $item->jumlah }}</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h4>ID Peminjaman : {{ $item->id }}</h4>
                                                <div class="mb-2">
                                                    <span class="badge text-bg-warning">{{ $item->status }}</span>
                                                </div>
                                                <h4 class="fw-bold mb-2">Selesai Pada</h4>
                                                <div class="mb-2">
                                                    <span
                                                        class="badge text-bg-danger p-4">{{ $item->pengembalian }}</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p>{{ $item->telat }} Hari</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p>Denda Rp. {{ $item->sanksi }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tab6" class="tabcontent">
                <div class="isi1">
                    <div class="container">
                        <div class="row">
                            @foreach ($bukuHilang as $item)
                                <div class="card m-3">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                                    class="img-buku">
                                            </div>
                                            <div class="col-md-4">
                                                <h2>{{ $item->nama }}</h2>
                                                <span class="badge text-bg-warning">status : siswa</span>
                                                <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                                <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }}</h5>
                                                <h5>Tanggal Kembali : {{ $item->tgl_kembali }}</h5>
                                                <h5>Jumlah Buku : {{ $item->jumlah }}</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <h4>ID Peminjaman : {{ $item->id }}</h4>
                                                <h5>Denda Rp. {{ $item->sanksi }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";


        }
        document.getElementById("defaultOpen").click();
    </script>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    @include('components.Footer')
</body>

</html>

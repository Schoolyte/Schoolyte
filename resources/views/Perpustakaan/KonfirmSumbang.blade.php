<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="Style/PeminjamanBuku.css">

    <title>Konfirmasi Sumbang Buku | Schoolyte</title>
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
        <div class="navbartab">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Menunggu</button>
                <button class="tablinks" onclick="openTab(event, 'Tab2')">Dikonfirmasi</button>
            </div>
            <div id="Tab1" class="tabcontent show active">
                <div class="container">
                    <div class="row">
                        @foreach ($bukuMenungguKonfirmasi as $item)
                            <div class="card m-3">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/Sumbang-Buku/' . $item->gambar) }}"
                                                alt="" class="img-buku">
                                        </div>
                                        <div class="col-md-6">
                                            <h2>{{ $item->nama }}</h2>
                                            <span class="badge text-bg-warning">status : siswa</span>
                                            <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                            <h5>Penulis : {{ $item->nama_penulis }}</h5>
                                            <h5>Kategori : {{ $item->kategori_buku }}</h5>
                                            <h5>Jumlah Buku : {{ $item->jumlah_buku }}</h5>
                                            <div class="mb-2">
                                                <span class="badge text-bg-secondary">Menunggu Konfirmasi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="Tab2" class="tabcontent">
                <div class="container">
                    <div class="row">
                        @foreach ($bukuSelesai as $item)
                            <div class="card m-3">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <img src="{{ asset('storage/Sumbang-Buku/' . $item->gambar) }}"
                                                alt="" class="img-buku">
                                        </div>
                                        <div class="col-md-6">
                                            <h2>{{ $item->nama }}</h2>
                                            <span class="badge text-bg-warning">status : siswa</span>
                                            <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                            <h5>Penulis : {{ $item->nama_penulis }}</h5>
                                            <h5>Kategori : {{ $item->kategori_buku }}</h5>
                                            <h5>Jumlah Buku : {{ $item->jumlah_buku }}</h5>
                                            <div class="mb-2">
                                                <span class="badge text-bg-secondary">{{ $item->status_buku }}</span>
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
    </div>
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
</body>

</html>
@include('components.Footer')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('Style/Perpustakaan.css') }}">

    <title>Perpustakaan | Schoolyte</title>
</head>
@include('components.Header ')
@yield('Navbar')

<body>
    <div class="fasilitas" style="min-height: 600vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
                <li><a href="#">Peminjaman</a></li>
                <li>Perpustakaan</li>
            </ul>
        </div>
        <div class="intro">
            <img src="/assets/lapangan.png" alt="">
            <span>Perpustakaan</span>
            <span>Cari dan Pinjam berbagai buku yang kalian inginkan</span>
        </div>
        <div class="desc">
            <span>Jam Pelayanan</span>
            <span>Setiap hari selama jam belajar mengajar berlangsung, weekend & tanggal merah tutup</span>
            <span>Koleksi</span>
            <span>Terdapat buku wajib dan buku peminatan untuk menunjang kegiatan belajar siswa, dan masih banyak lagi
                buku referensi dan ensiklopedia</span>

            <div class="JadwalPinjam-base">
                <span class="span1">Sumbang Buku</span>
                <span class="span2">Anda dapat melakukan sumbang buku yang anda inginkan untuk menambah koleksi buku
                    perpustakaan dengan mengisi form terlebih dahulu</span>

                <div class="k3"> <a href={{ route('Perpustakaan/FormSumbangBuku') }}>Silahkan Isi Form Terlebih
                        Dahulu</a></div>

                <span class="span3">Buku - buku yang telah anda sumbangankan</span>
                <a href={{ route('Perpustakaan/KonfirmSumbang') }}><button type="submit"
                        class="btn-lihat">Lihat</button></a>

            </div>
        </div>
        <div class="navbartab">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Buku</button>
                <button class="tablinks" onclick="openTab(event, 'Tab2')">Menunggu</button>
                <button class="tablinks" onclick="openTab(event, 'Tab3')">Dipinjam</button>
                <button class="tablinks" onclick="openTab(event, 'Tab4')">Kembali</button>
                <button class="tablinks" onclick="openTab(event, 'Tab5')">Selesai</button>
                <button class="tablinks" onclick="openTab(event, 'Tab6')">Telat</button>
                <button class="tablinks" onclick="openTab(event, 'Tab7')">Kehilangan</button>

            </div>

            <div id="Tab1" class="tabcontent show active">
                <div class="row mt-4">
                    @foreach ($buku as $item)
                        <div class="col-6">
                            <a href="/Perpustakaan/pinjam/{{ $item->nama_buku }}" class="nav-link">
                                <div class="pinjam1 p-4">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                                class="img-pinjam">
                                        </div>
                                        <div class="col-6">
                                            <span class="align-middle">
                                                <h5>Nama Buku : {{ $item->nama_buku }} </h5>
                                                <h5>Penulis : {{ $item->nama_penulis }}</h5>
                                                <h5>Tahun Terbit : {{ $item->tahun_terbit }} </h5>
                                                <h5>Kategori : {{ $item->kategori_buku }} </h5>
                                                @if ($item->jumlah_buku > 0)
                                                    <span class="badge text-bg-warning">Tersedia</span>
                                                @else
                                                    <span class="badge text-bg-danger">Habis</span>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="Tab2" class="tabcontent">
            <div class="row mt-4">
                @foreach ($bukuMenungguKonfirmasi as $item)
                    <div class="col-6 mb-4">
                        <div class="konfirm1 p-4">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                        class="img-pinjam">
                                </div>
                                <div class="col-6">
                                    <span class="align-middle">
                                        <h5>ID Peminjaman : {{ $item->id }} </h5>
                                        <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                        <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }} </h5>
                                        <h5>Tanggal Kembali : {{ $item->tgl_kembali }} </h5>
                                        <h5>Jumlah Buku : {{ $item->jumlah }} </h5>
                                        <span class="badge text-bg-warning">{{ $item->status }}</span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="Tab3" class="tabcontent">
            <div class="row mt-4">
                @foreach ($bukuDipinjam as $item)
                    <div class="col-6 mb-4">
                        <div class="konfirm1 p-4">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                        class="img-pinjam">
                                </div>
                                <div class="col-6">
                                    <span class="align-middle">
                                        <h5>ID Peminjaman : {{ $item->id }} </h5>
                                        <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                        <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }} </h5>
                                        <h5>Tanggal Kembali : {{ $item->tgl_kembali }} </h5>
                                        <h5>Jumlah Buku : {{ $item->jumlah }} </h5>
                                        <span class="badge text-bg-warning mb-3">{{ $item->status }}</span>
                                        <form action="/pengembalianBuku" method="post">
                                            @csrf
                                            <input type="hidden" name="idPeminjaman" value="{{ $item->id }}">
                                            <button type="submit" onclick="return confirm('Apakah anda yakin?')"
                                                class="btn btn-danger">Kembalikan</button>
                                        </form>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="Tab4" class="tabcontent">
            <div class="row mt-4">
                @foreach ($bukuDikembalikan as $item)
                    <div class="col-6 mb-4">
                        <div class="konfirm1 p-4">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                        class="img-pinjam">
                                </div>
                                <div class="col-6">
                                    <span class="align-middle">
                                        <h5>ID Peminjaman : {{ $item->id }} </h5>
                                        <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                        <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }} </h5>
                                        <h5>Tanggal Kembali : {{ $item->tgl_kembali }} </h5>
                                        <h5>Jumlah Buku : {{ $item->jumlah }} </h5>
                                        <span class="badge text-bg-warning mb-3">{{ $item->status }}</span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="Tab5" class="tabcontent">
            <div class="row mt-4">
                @foreach ($bukuSelesai as $item)
                    <div class="col-6 mb-4">
                        <div class="konfirm1 p-4">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                        class="img-pinjam">
                                </div>
                                <div class="col-6">
                                    <span class="align-middle">
                                        <h5>ID Peminjaman : {{ $item->id }} </h5>
                                        <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                        <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }} </h5>
                                        <h5>Tanggal Kembali : {{ $item->tgl_kembali }} </h5>
                                        <h5>Jumlah Buku : {{ $item->jumlah }} </h5>
                                        <span class="badge text-bg-secondary mb-3">{{ $item->status }}</span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="Tab6" class="tabcontent">
            <div class="row mt-4">
                @foreach ($bukuTelat as $item)
                    <div class="col-6 mb-4">
                        <div class="konfirm1 p-4">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                        class="img-pinjam">
                                </div>
                                <div class="col-6">
                                    <span class="align-middle">
                                        <h5>ID Peminjaman : {{ $item->id }} </h5>
                                        <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                        <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }} </h5>
                                        <h5>Tanggal Kembali : {{ $item->tgl_kembali }} </h5>
                                        <h5>Jumlah Buku : {{ $item->jumlah }} </h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <span
                                                    class="badge text-bg-danger mb-3 px-4">{{ $item->status }}</span>
                                            </div>
                                            <div class="col-6">
                                                <h5>{{ $item->telat }} Hari</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Denda</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>Rp. {{ $item->sanksi }}</h5>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="Tab7" class="tabcontent">
            <div class="row mt-4">
                @foreach ($bukuHilang as $item)
                    <div class="col-6 mb-4">
                        <div class="konfirm1 p-4">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{ asset('storage/Buku/' . $item->image) }}" alt=""
                                        class="img-pinjam">
                                </div>
                                <div class="col-6">
                                    <span class="align-middle">
                                        <h5>ID Peminjaman : {{ $item->id }} </h5>
                                        <h5>Nama Buku : {{ $item->nama_buku }}</h5>
                                        <h5>Tanggal Pinjam : {{ $item->tgl_pinjam }} </h5>
                                        <h5>Tanggal Kembali : {{ $item->tgl_kembali }} </h5>
                                        <h5>Jumlah Buku : {{ $item->jumlah }} </h5>
                                        <hr>
                                        <span class="badge text-bg-danger mb-3 px-4">{{ $item->status }}</span>
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Denda</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>Rp. {{ $item->sanksi }}</h5>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
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
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</body>

</html>
@include('components.Footer')

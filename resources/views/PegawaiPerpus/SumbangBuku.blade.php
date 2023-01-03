<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/SumbangBuku.css">
    <title>Sumbang Buku | Schoolyte</title>
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
        <h1>Sumbang Buku</h1>
        <div class="navbartab">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Menunggu</button>
                <button class="tablinks" onclick="openTab(event, 'Tab2')">Dikonfirmasi</button>
            </div>

            <div id="Tab1" class="tabcontent show active">
                @foreach ($bukuMenungguKonfirmasi as $item)
                    <div class="isi1">
                        <img src="{{ asset('storage/Sumbang-Buku/' . $item->gambar) }}" alt="" class="img-buku">
                        <div class="nama">{{ $item->nama }}</div>
                        <div class="status">status : siswa</div>
                        <span class="mtext1">Nama Buku : {{ $item->nama_buku }}</span>
                        <span class="mtext2">Penulis : {{ $item->nama_penulis }}</span>
                        <span class="mtext3">Kategori : {{ $item->kategori_buku }}</span>
                        <span class="mtext4">Jumlah Buku : {{ $item->jumlah_buku }}</span>
                        <div class="konfrim">{{ $item->status_buku }}</div>
                        <form action="/setujuSumbang" method="post">
                            @csrf
                            <input type="hidden" name="id_sumbang_buku" value="{{ $item->id_sumbang_buku }}"
                                id="">
                            <input type="hidden" name="nama_buku" value="{{ $item->nama_buku }}" id="">
                            <input type="hidden" name="tahun_terbit" value="{{ $item->tahun_terbit }}" id="">
                            <input type="hidden" name="nama_penulis" value="{{ $item->nama_penulis }}" id="">
                            <input type="hidden" name="rincian_buku" value="{{ $item->rincian_buku }}" id="">
                            <input type="hidden" name="jumlah_buku" value="{{ $item->jumlah_buku }}" id="">
                            <input type="hidden" name="gambar" value="{{ $item->gambar }}" id="">
                            <input type="hidden" name="kategori_buku" value="{{ $item->kategori_buku }}"
                                id="">
                            <button type="submit" class="btn-ya"
                                onclick="return confirm('Apakah anda yakin?')">Ya</button>
                        </form>
                        <form action="/tolakSumbang" method="post">
                            @csrf
                            <input type="hidden" name="id_sumbang_buku" value="{{ $item->id_sumbang_buku }}"
                                id="">
                            <input type="hidden" name="nama_buku" value="{{ $item->nama_buku }}" id="">
                            <input type="hidden" name="tahun_terbit" value="{{ $item->tahun_terbit }}" id="">
                            <input type="hidden" name="nama_penulis" value="{{ $item->nama_penulis }}" id="">
                            <input type="hidden" name="rincian_buku" value="{{ $item->rincian_buku }}" id="">
                            <input type="hidden" name="jumlah_buku" value="{{ $item->jumlah_buku }}" id="">
                            <input type="hidden" name="gambar" value="{{ $item->gambar }}" id="">
                            <input type="hidden" name="kategori_buku" value="{{ $item->kategori_buku }}"
                                id="">
                            <button type="submit" class="btn-tidak"
                                onclick="return confirm('Apakah anda yakin?')">Tidak</button>
                        </form>
                    </div>
                @endforeach
            </div>


            <div id="Tab2" class="tabcontent">
                @foreach ($bukuSelesai as $item)
                    <div class="isi1">
                        <img src="{{ asset('storage/Sumbang-Buku/' . $item->gambar) }}" alt=""
                            class="img-buku">
                        <div class="nama">{{ $item->nama }}</div>
                        <div class="status">status : siswa</div>
                        <span class="mtext1">Nama Buku : {{ $item->nama_buku }}</span>
                        <span class="mtext2">Penulis : {{ $item->nama_penulis }}</span>
                        <span class="mtext3">Kategori : {{ $item->kategori_buku }}</span>
                        <span class="mtext4">Jumlah Buku : {{ $item->jumlah_buku }}</span>
                        <div class="konfrim2">{{ $item->status_buku }}</div>

                    </div>
                @endforeach


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

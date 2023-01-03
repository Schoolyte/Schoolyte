<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href={{ asset('Style/FormSumbangBuku.css') }}>
    <title>Form Sumbang Buku | Schoolyte</title>
</head>
@include('components.Header ')
@yield('Navbar')

<body>
    <div class="fasilitas" style="min-height: 65vh;">
        <div class="tittle-page">
            <span>Perpustakaan</span>
            <ul class="breadcrumb">
                <li><a href="#">Peminjaman</a></li>
                <li>Perpustakaan</li>
            </ul>
        </div>

        <span class="sub1">Form Sumbang Buku</span>
        <span class="sub2">Silahkan memasukkan data buku yang ingin anda sumbangkan pada perpustakaan!</span>
    </div>

    <div class="container">
        <h1>Tambah Buku</h1>
        <form action="/storeSumbangBuku" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputText" class="form1 form-label">Nama Buku</label>
                        <input name="namaBuku" type="text" class="ctrl1 form-control" id="Nama"
                            placeholder="Nama Buku" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form2 form-label">Penulis</label>
                        <input name="penulis" type="text" class="ctrl2 form-control" id="Nama"
                            placeholder="Penulis" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form3 form-label">Tahun Terbit</label>
                        <input name="tahunTerbit" type="number" class="ctrl3 form-control" id="Nama"
                            placeholder="Tahun Terbit" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form4 form-label">Katergori</label>
                        <input name="kategori" type="text" class="ctrl4 form-control" id="Nama"
                            placeholder="Kategori" required></input>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form4 form-label">Jumlah Buku</label>
                        <input name="jumlahBuku" type="number" class="ctrl4 form-control" id="Nama"
                            placeholder="Jumlah buku" required></input>
                        <div class="form-text"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputText" class="form5 form-label">Rincian Buku</label>
                        <textarea name="rincianBuku" type="text" class="ctrl5 form-control" id="Rincian" placeholder="Rincian Buku"
                            required></textarea>
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form6 form-label">Unggah Gambar</label>
                        <input name="gambar" type="file" class="ctrl6 form-control" id="Nama"
                            placeholder="Unggah Gambar" required></input>
                        <div class="form-text"></div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning mb-5">Submit</button>
            </div>
        </form>
    </div>

    {{-- <div class="form-sumbangbuku">
        <form action="/Berita/Tambahberita/store" method="POST" class="addnews-form">
            @csrf
            <div class="label">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label1">Nama Buku</label>
                    <textarea name="JUDUL_BERITA" class="cat1 form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label2">Rincian Buku</label>
                    <textarea name="ISI_BERITA" class="cat2 form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>
                <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label3">Unggah Gambar</label>
                    <input name="THUMBNAIL_BERITA" type="file" class="form-control-file"
                        id="exampleFormControlFile1"></input>
                </div>
            </div>
            <button href="" type="submit" class="btn-deliver" required>Submit</button>
        </form>
    </div> --}}


</body>

</html>

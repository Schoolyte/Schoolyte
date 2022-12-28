<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Berita | Schoolyte</title>
    <link rel="stylesheet" href={{ asset("Style/Tambahberita.css") }}>
</head>
<body>
    <div class="regisnews">
        <div class="page-tittle">
            <span>TAMBAH BERITA</span>
        </div>
        <div class="command">
            <span>Silahkan Input Berita Anda Disini!</span>
        </div>
        <div class="form-regisnews">
            <form action="/Berita/Tambahberita/store" method="POST" class="addnews-form">
                @csrf
                <div class="label">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label1">Judul Berita</label>
                        <textarea name="JUDUL_BERITA"   class="cat1 form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label  for="exampleInputPassword1" class="form-label2">Isi Berita</label>
                        <textarea name="ISI_BERITA" class="cat2 form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                    <div class="mb-4">
                        <label  for="exampleInputPassword1" class="form-label3">Unggah Gambar</label>
                        <input name="THUMBNAIL_BERITA" type="file" class="form-control-file" id="exampleFormControlFile1"></input>
                    </div>
            </div>
            <button href="" type="submit" class="btn-deliver" required>Submit</button>
            </form>


        </div>
    </div>
</body>
</body>
</html>

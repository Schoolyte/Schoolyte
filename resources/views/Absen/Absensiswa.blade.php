<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
    <link rel="stylesheet" href="Style/Absensiswa.css">
    <title>Absensi Siwa</title>
</head>
@yield('Navbar')
<body>
    <div class="absen-siswa" style="min-height: 300vh;">
        <div class="tittle-page">
            <span>Absensi Kehadiran</span>
            <ul class="breadcrumb">
              <li><a href="#">Akademik</a></li>
              <li>Absensi Kehadiran</li>
            </ul>
        </div>
        <div class="warning">
            <span>Silahkan melakukan absen kehadiran dengan persyaratan sebagai berikut !!</span>
            <span>• Absen dilakukan dengan mengunggah foto yang memperlihatkan wajah dengan jelas hingga area dada <br/>
                  • Apabila sedang sakit dapat mengunggah surat keterangan dari dokter <br/>
                  • Apabila izin dapat mengunggah surat keterangan dari orang tua</span>
        </div>
        <div class="kehadiran">
            <span class="perintah">Silahkan upload bukti kehadiran disini !!</span>
            <label for="exampleSelect" class="form1 form-label">Kehadiran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <select class="select form-select" aria-label="Default select example">
                <option selected>Kehadiran </option>
                <option value="1">Hadir</option>
                <option value="2">Sakit</option>
                <option value="3">Izin</option>
            </select>
            <div class="mb-3 col-sm-6">
                <label for="exampleInputText" class="f1 form-label">Bukti Kehadiran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                <div class="camera"  id="my_camera"></div>
                <input class="btn btn-success text-center" type="button" value="Ambil Foto" onClick="take_snapshot()" required>
                <div class="form-text"></div>
            </div>
            <a href={{ route("Dashboard") }}><button type="submit" class="submit">Submit</button></a>
        </div>
        <div class="status">
            <div class="tanggal">Senin, 12 September 2023</div>
            <div class="jam">07.00 WIB</div>
            <div class="keterangan">Hadir</div>
        </div>
    </div>


  <script language="JavaScript">
    Webcam.set({
      width: 320,
      height: 240,

      image_format: 'jpeg',
      jpeg_quality: 90
    });
    Webcam.attach('#my_camera');


    function take_snapshot() {

      // take snapshot and get image data
      Webcam.snap(function (data_uri) {
        // display results in page
        document.getElementById('results').innerHTML =
          '<img src="' + data_uri + '"/><input type="text" name="foto" value="' + data_uri + '" required/>';
      });
    }
  </script>
</body>
</html>
@include('components.Footer')

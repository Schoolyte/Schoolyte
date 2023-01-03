<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/LihatKunjungan.css">
    <title>Document</title>
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
        <h1>Lihat Kunjungan</h1>
        <a href="#"><button type="submit" class="btn-plus"><i class="fa fa-plus" style="font-size:20px"></i> Tambah </button></a>
        <table >
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nama Buku</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		<tr>
			<td>1</td>
			<td></td>
            <td></td>
			<td></td>
			<td>
				<a href="">Edit</a>
				|
				<a href="">Hapus</a>
			</td>
		</tr>
		
	</table>
    </div>
</body>
</html>
@include('components.Footer')
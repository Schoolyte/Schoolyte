<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="Style/Menu.css">
    <title>Document</title>
</head>
@yield('Navbar')
<body>
    <div class="menu" style="min-height: 270vh;">
        <div class="tittle-page">
            <span>Kantin</span>
            <ul class="breadcrumb">
                <li><a href="#">Pembelian</a></li>
                <li>Kantin</li>
            </ul>
        </div>
        <h1>Dapur Bu Dewi, Kode : 01</h1>
        <span class="jenis">Makanan, Minuman</span>
        <div class="menu1">
            <img src="/assets/image48.png" alt="" class="img-menu">
            <div class="pesanan">Nasi Goreng Spesial</div>
            <div class="harga">Rp 10.000</div>
            <div class="number">
                <span class="minus">-</span>
                <input type="text" value="0"/>
                <span class="plus">+</span>
            </div>
        </div>
        <div class="menu2">
            <img src="/assets/image48.png" alt="" class="img-menu">
            <div class="pesanan">Nasi Goreng Spesial</div>
            <div class="harga">Rp 10.000</div>
            <div class="number">
                <span class="minus">-</span>
                <input type="text" value="0"/>
                <span class="plus">+</span>
            </div>
        </div>
        <div class="menu3">
            <img src="/assets/image48.png" alt="" class="img-menu">
            <div class="pesanan">Nasi Goreng Spesial</div>
            <div class="harga">Rp 10.000</div>
            <div class="number">
                <span class="minus">-</span>
                <input type="text" value="0"/>
                <span class="plus">+</span>
            </div>
        </div>
        <div class="menu4">
            <img src="/assets/image48.png" alt="" class="img-menu">
            <div class="pesanan">Nasi Goreng Spesial</div>
            <div class="harga">Rp 10.000</div>
            <div class="number">
                <span class="minus">-</span>
                <input type="text" value="0"/>
                <span class="plus">+</span>
            </div>
        </div>
        <div class="menu5">
            <img src="/assets/image48.png" alt="" class="img-menu">
            <div class="pesanan">Nasi Goreng Spesial</div>
            <div class="harga">Rp 10.000</div>
            <div class="number">
                <span class="minus">-</span>
                <input type="text" value="0"/>
                <span class="plus">+</span>
            </div>
        </div>
        <div class="menu6">
            <img src="/assets/image48.png" alt="" class="img-menu">
            <div class="pesanan">Nasi Goreng Spesial</div>
            <div class="harga">Rp 10.000</div>
            <div class="number">
                <span class="minus">-</span>
                <input type="text" value="0"/>
                <span class="plus">+</span>
            </div>
        </div>
        <div class="menu7">
            <img src="/assets/image48.png" alt="" class="img-menu">
            <div class="pesanan">Nasi Goreng Spesial</div>
            <div class="harga">Rp 10.000</div>
            <div class="number">
                <span class="minus">-</span>
                <input type="text" value="0"/>
                <span class="plus">+</span>
            </div>
        </div>
    </div>
    <script>
        	$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
    </script>
</body>
</html>
@include('components.Footer')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin - Stand</title>
    <link rel="stylesheet" href="Style/Stand.css">

</head>
<body>
  <header>
  @include('components.Header')
  @yield('Navbar')
  </header>
  <div class="Main">
    <div class="page-ekskul">
      <div class="tittle-page">
        <span>Pembelian</span>
        <ul class="breadcrumb">
          <li><a href="#">Pembelian</a></li>
        <li>Kantin</li>
        </ul>
      </div>
      <div class="intro">
        <img src="/assets/Main-Kantin.png" alt="">
        <span>KANTIN</span>
        <span>Anda dapat melakukan pembelian di Kantin dengan mudah</span>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="hiasan">
    <img src="/assets/Wallet.png" alt=""><span>Rp 100.000</span>
  </div>
    </div>
  </div>
</body>
<footer>
  @include('components.Footer')
</footer>

</html>



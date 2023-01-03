<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin - Stand</title>
    <link rel="stylesheet" href={{ asset("Style/Stand.css") }}>

</head>
@include('components.Header')
@yield('Navbar')
<body>
    <div class="main" style="min-height: 470vh;">
      <div class="tittle-page">
        <span>Kantin</span>
          <ul class="breadcrumb">
            <li><a href="#">Pembelian</a></li>
            <li>Kantin </li>
          </ul>
      </div>
      <div class="intro">
        <img src="/assets/image 19.png" alt="">
        <span>KANTIN</span>
        <span>Anda dapat melakukan pembelian di Kantin dengan mudah</span>
      </div>
      <div class="saldo">
        <img src="/assets/Wallet.png" alt=""><span>Rp {{ $user->saldo }}</span>
      </div>
      <div class="navbartab">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Tab1')" id="defaultOpen">Stand Kantin</button>
            <button class="tablinks" onclick="openTab(event, 'Tab2')">Pesanan Saya</button>
            <button class="tablinks" onclick="openTab(event, 'Tab3')">Selesai</button>
        </div>

        <div id="Tab1" class="tabcontent show active">
            @foreach ($stands as $item)
            <div class="dapur{{$loop->index + 1}}">
                <a href={{ route('Kantin/Menu', [$item->id]) }}>
                <img src="/assets/image 3.png" alt="" class="img-dapur">
                <span class="text1">{{ $item->nama_stand }}</span>
                <span class="text2">Kode : {{ $item->id }}</span>
                <span class="text3">Jenis : {{ $item->jenis_stand}}</span>
                </a>
            </div>
            @endforeach
        </div>

        <div id="Tab2" class="tabcontent">
            @foreach ($pesanans as $item)
            <div class="pesanan{{ $loop->index + 1 }}">
                    <span class="t1">No. Pesanan :</span>
                    <span class="t2">Waktu Pemesanan</span>
                    <div class="id">{{ $item->id }}</div>
                    <div class="tanggal">{{ \Carbon\Carbon::parse($item->created_at)->format('l, d F Y') }}</div>
                    <img src="/assets/image 3.png" alt="" class="pesanan">
                    <div class="kode">{{ $item->stand->nama_stand }}, Kode: {{ $item->stand->kode_stand }}</div>
                    <div class="minuman" style="width: 76%;display: block">
                        @foreach ($item->pesanan_menu as $menu)
                            <div style="display: flex; justify-content: space-between;">
                                <div>{{ $menu->qty }}x {{ $menu->menu->nama_menu }}</div>
                                <div>Rp {{ $menu->menu->harga }}</div>
                            </div>
                        @endforeach
                    </div>
                    <div class="total">Total Bayar : Rp {{ $item->total_harga }}</div>
                    @if ($item->status == 'pending')
                        <a>
                            <button type="button" class="btn-primary" disabled style="background-color: #4b4b4b;">
                            pending
                            </button>
                        </a>
                    @elseif ($item->status == 'dikonfirmasi')
                        <a href="{{ route('Kantin/Stand', ['action' => 'selesai', 'id' => $item->id]) }}"><button type="submit" class="btn-primary">Selesai</button></a>
                    @endif
                </div>
            @endforeach
        </div>
        <div id="Tab3" class="tabcontent">
            @foreach ($pesanans_selesai as $item)
            <div class="pesanan{{ $loop->index + 1 }}">
                    <span class="t1">No. Pesanan :</span>
                    <span class="t2">Waktu Pemesanan</span>
                    <div class="id">{{ $item->id }}</div>
                    <div class="tanggal">{{ \Carbon\Carbon::parse($item->created_at)->format('l, d F Y') }}</div>
                    <img src="/assets/image 3.png" alt="" class="pesanan">
                    <div class="kode">{{ $item->stand->nama_stand }}, Kode: {{ $item->stand->kode_stand }}</div>
                    <div class="minuman" style="width: 76%;display: block">
                        @foreach ($item->pesanan_menu as $menu)
                            <div style="display: flex; justify-content: space-between;">
                                <div>{{ $menu->qty }}x {{ $menu->menu->nama_menu }}</div>
                                <div>Rp {{ $menu->menu->harga }}</div>
                            </div>
                        @endforeach
                    </div>
                    <div class="total">Total Bayar : Rp {{ $item->total_harga }}</div>
                </div>
            @endforeach
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


<!DOCTYPE html>
<html lang="en">
@include('components.Header ')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset("Style/Menu.css") }}>
    <title>Menu Kantin</title>
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
        <h1 style="text-align: center;">Rincian Pesanan</h1>
        <span class="jenis">{{ $stand->jenis_stand }}</span>
        @foreach ($menu_to_order as $item)
            @if ($item['qty'] > 0)
            <div class="menu{{$loop->index + 1}}">
                <img src=data:image/png;base64,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 alt="" class="img-menu">
                <div class="pesanan">{{ $item['menu']->nama_menu }}</div>
                <div class="harga">Rp. {{ $item['menu']->harga }}</div>
                <div class="number">
                    <input type="text" value="{{ $item['qty'] }}" disabled>
                </div>
            </div>
            @endif
        @endforeach


        {{-- button --}}
        <div style="position: absolute; top: 1200px; left: 10vh">
            <div style="margin-bottom: 1rem;">
                <div style="display: flex; justify-content: space-between;">
                    <label>Total Anda :</label>
                    <div>Rp {{ $total_harga }}</div>
                </div>
            </div>
            <div style="margin-bottom: 1rem;">
                <div style="display: flex; justify-content: space-between;">
                    <label>Saldo Anda :</label>
                    <div>Rp {{ $user->saldo }}</div>
                </div>
            </div>
            <form>
            <div style="margin-bottom: 1rem;">
                <div>
                    <label>Catatan :</label>
                    <textarea class="form-control" name="catatan"></textarea>
                </div>
            </div>
            @if ($total_harga <= $user->saldo)
                    <input type="hidden" name="menus_to_order" value="{{ json_encode($menu_to_order) }}">
                    <input type="hidden" name="action" value="order">
                    <button style="padding: 1rem;background: rgb(255, 78, 65); width: 1300px;border-radius: 10px;font-size: 1rem; color: white; text-align: center; cursor: pointer;">
                        BELI
                    </button>
                </form>
            @else
                <button style="padding: 1rem;background: rgb(53, 53, 53); width: 1300px;border-radius: 10px;font-size: 1rem; color: white; text-align: center; cursor: pointer;">
                    BELI (saldo anda tidak cukup)
                </button>
            @endif
        </div>
    </div>
</body>
</html>
@include('components.Footer')

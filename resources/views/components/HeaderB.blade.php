<!DOCTYPE html>
<html>

@section('content')

<head>
    <link href="Style/NavbarB.css" rel="stylesheet">
    
</head>


<nav class="navbar">
    <div class="navbar navbar-expand-lg">
        <div class="container-fluidB">
        <a class="navbar-brand" href="#">

        <img src="assets/logo1.png" class="Logo-img"  alt="logo" style="width: 151px;height: 37px; top: 63px;"/>
        </a>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="menu-beranda">
            <li><a class="nav-brd" href="#">Beranda</a></li>
            <li><a class="nav-brd" href="#">Kontak</a></li>
            <a href="/Login"><button type="button" class="btn-login">Login</button></a>
            </ul>
        </div>
        </div>
    </div>
</nav>
@endsection

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/72c53e6b6a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet'>
    <style>
        body {
            font-family: 'Hind' !important;
        }
    </style>
      <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        </style>
    <title>Care-ity</title>
</head>

<body>
    <nav class="navbar navbar-light" style="padding-left: 75px; padding-right: 75px; background-color: #295A48 ; ">
        <ul class="navbar-nav mr-auto"></ul>
@if (isset($user_data[0]))
        <li class="nav-link text-light">Halo, {{$user_data[0]->username}}</li>
        <a class="nav-link text-light" href="{{url("/profil/profil_saya")}}"><b>Profil</b> <i class="fas fa-user"></i></a>
        <a class="nav-link text-light" href="{{url("/logout")}}"><b>Keluar</b> <i class="fas fa-sign-out-alt"></i></a>
@else
        <a class="nav-link text-light" href="{{url("/login")}}"><b>Masuk</b> <i class="fas fa-sign-in-alt"></i></a>
        <a class="nav-link text-light" href="{{url("/register")}}"><b>Daftar</b><i class="fas fa-user-plus"></i></a>
@endif
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="margin-left: 75px; margin-right: 75px;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <br>
            <div class="col-sm">
                        <form action="{{url("/")}}">
                            @csrf
                            <input type="image" src="{{ URL::to('/') }}/lg.png" width="134" height="41">
                        </form>
                    </div>
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link text-dark" href="{{url("/tentang_kami")}}"><b>Tentang Kami</b><span class="sr-only">(current)</span></a>
                <a class="nav-link text-dark" href="{{url("/berita")}}"><b>Berita</b></a>
                <a class="nav-link text-dark" href="{{url("/penggalangan_dana")}}"><b>Penggalangan Dana</b></a>
                <a class="nav-link text-dark" href="{{url("/donasi")}}"><b>Donasi</b></a>
                <a class="nav-link text-dark" href="{{url("/zakat")}}"><b>Zakat</b></a>
                <a class="nav-link text-dark" href="{{url("/qurban")}}"><b>Qurban</b></a>
            </form>
            <br>
        </div>
    </nav>
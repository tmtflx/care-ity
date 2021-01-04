@include("include/header")
<div>
    <div>
        <img src="dn.png" class="img-fluid">
    </div>
</div>

<div class="container text-justify">
    <div class="row featurette">
    </div>
    <br><br><br>
    <h1 style="color:#295A48" class="text-center"><b>Corporate Social Responsibility PT. SI4207</b></h1>
    <p class="text-center">Mari berdonasi bersama PT. SI4207 dengan sesama dengan membantu memberikan donasi
        kepada yang membutuhkan.</p>
    <br><br>
    <br>
    @for ($i = 0; $i < count($daftar_donasi); $i++) <div class="col mb-4" style="font-family:   sans-serif; height: 250px;">
        <div class="row no-gutters">
            <div class="col-md-3"><br>
                <img src="{{$daftar_donasi[$i]->gambar}} " width="250" height="250" class="card-img" alt="...">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$daftar_donasi[$i]->nama}}</b></h5>
                    <div class="container-fluid" style="border:1px solid #cecece;">
                    <br>
                    <p>Deskripsi:</p>
                        <p class="card-text">{{$daftar_donasi[$i]->informasi}}</p>
                        <br>
                    </div>
                    <br>
                    <div class="text-right">
                        <a href="{{url("donasi/donasi/".$daftar_donasi[$i]->id)}}" type="submit" class="btn btn-success" name="submit">Donasi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
</div><br>
<br>
@endfor
<hr class="featurette-divider">
<br>
<br>
<h4 class="mt-4 text-center">Kebahagiaan tidak akan habis hanya karena membaginya.</h4>
<h4 class="mt-4 text-center">Ketahuilah, kebahagiaan bertambah ketika kamu bersedia untuk berbagi.</h4>
<br><br><br>
@include("include/footer");
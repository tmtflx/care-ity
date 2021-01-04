@include("include/header")
@include("include/needlogin")
<img src="{{ URL::to('/') }}/rb.png" class="img-fluid">
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{url($berita->gambar)}}" style="width:100%;height:auto;">
        </div>
        <div class="col">
            <h3><b>{{$berita->judul}}</b></h3>
            <p>{{$berita->deskripsi}}</p>
            <br>
            <hr>
            <br>
            <p>Tanggal : {{$berita->tanggal}}</p>
            <p>Total Donasi : Rp. {{$berita->jumlah}}</p>
            
        </div>
    </div>
</div>
<br><br>
@include("include/footer")
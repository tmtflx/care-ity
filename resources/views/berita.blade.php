@include('include/header')
<div>
  <div>
    <img src="Berita.png" class="img-fluid">
  </div>

</div>
<br><br><br>
<div class="container text-center">
  <h1 style="color:#295A48"><b>Update Berita Donasi</b></h1>
  <p>Berikut merupakan update informasi terkini terkait penyaluran donasi.</p>
  <br><br>
  <div class="row row-cols-1 row-cols-md-2 g-4 text-justify">
    @if (count($berita) == 0)
    <p>Tidak ada berita</p>
    @endif
    @for ($i=0;$i<count($berita);$i++) <div class="col">
      <div class="card">
        <div class="card-body">
          <img class="card-img-top" src="{{url($berita[$i]->gambar)}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>{{$berita[$i]->judul}}<b></h5>
            <p class="card-text">{{$berita[$i]->deskripsi}}</p>
            <div class="text-right">
            <a href="{{url("berita/detail/".$berita[$i]->id)}}" class="btn btn-success">Detail</a>
            </div>
            
          </div>
        </div>
      </div>
  </div>
  @endfor
</div>
<br><br>
@include('include/footer')
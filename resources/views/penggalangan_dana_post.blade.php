@include('include/header')
<img src="{{ URL::to('/') }}/kf.png" class="img-fluid">
<br><br>
<div class="container">
    <form method="post" action="{{url("/penggalangan_dana/post")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Gambar Berita</label>
          <br><br>
          <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <br>
        <div class="form-group">
            <label>Verifikasi Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="hidden" name="id_penggalangan_dana" value="{{$penggalangan_dana->id}}">
        <div class="text-right">
        <button type="submit" class="btn btn-success">Post</button>
        </div>
        
    </form>
</div>
<br><br>
@include('include/footer')
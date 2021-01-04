@include('include/header')
<img src="{{ URL::to('/') }}/kf.png" class="img-fluid">
<br><br>
<div class="container">
    <form action="{{url("/donasi/edit")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul Donasi</label>
            <input type="text" name="judul" value="{{$donasi[0]->nama}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Informasi</label>
          <textarea class="form-control" name="informasi" id="exampleFormControlTextarea1" rows="3">{{$donasi[0]->informasi}}</textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" name="gambar" class="form-control-file" id="gambar">
        </div>
        <div class="form-group">
            <label>Dana yang dibutuhkan</label>
            <input type="number" name="dana_max" value="{{$donasi[0]->dana_max}}" class="form-control">
        </div>
        <input type="hidden" name="id_donasi" value="{{$donasi[0]->id}}">
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@include('include/footer')
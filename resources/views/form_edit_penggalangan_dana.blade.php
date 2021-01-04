@include('include/header')
<div class="container">
    <form action="{{url("/penggalangan_dana/edit")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Penggalangan Dana</label>
            <input type="text" name="judul" value="{{$penggalangan_dana[0]->judul}}" value="" class="form-control">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" name="gambar" class="form-control-file" id="gambar">
        </div>
        <div class="form-group">
            <label>Dana yang dibutuhkan</label>
            <input type="number" name="dana_max" value="{{$penggalangan_dana[0]->dana_max}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Informasi</label>
          <textarea class="form-control" name="informasi" id="exampleFormControlTextarea1" rows="3">{{$penggalangan_dana[0]->informasi}}</textarea>
        </div>
        <input type="hidden" name="id_penggalangan_dana" value="{{$penggalangan_dana[0]->id}}">
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@include('include/footer')
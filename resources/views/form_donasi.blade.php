@include('include/header')
<img src="{{ URL::to('/') }}/kf.png" class="img-fluid">
<br><br>
<div class="container">
    <form action="{{url("/donasi/baru")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul Donasi</label>
            <input type="text" name="judul" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Informasi</label>
          <textarea class="form-control" name="informasi" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" name="gambar" class="form-control-file" id="gambar">
        </div>
        <div class="form-group">
            <label>Dana yang dibutuhkan</label>
            <input type="number" name="dana_max" value="1000000" class="form-control">
        </div>
        <input type="hidden" name="id_pembuat" value="{{$user_data[0]->id}}">
        <div class="text-right">
        <button type="submit" class="btn btn-success">Buat</button>
        </div>
        
    </form>
</div> 
<br><br>
@include('include/footer')
@include('include/header')
<img src="{{ URL::to('/') }}/kf.png" class="img-fluid">
<br><br><br>
<div class="container">
    <form method="post" action="{{url("kirim/bukti_pembayaran_penggalangan_dana")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Kirim Gambar Bukti Pembayaran Penggalangan Dana</label>
          <br>
          <br>
          <input type="file" name="buktipem" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <br>
        <input type="hidden" name="username" value="{{$user_data[0]->username}}">
        <input type="hidden" name="id_penggalangan_dana" value="{{$id_penggalangan_dana}}">
        <button type="submit" class="btn btn-success">Kirim</button>
    </form>
</div>
<br><br>
@include("include/footer")
@include('include/header')
<img src="{{ URL::to('/') }}/kf.png" class="img-fluid">
<br><br><br>
<div class="container">
    <form method="post" action="{{url("kirim/bukti_pembayaran_zakat")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Kirim Gambar Bukti Pembayaran Zakat</label>
          <br><br>
          <input type="file" name="buktipem" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <input type="hidden" name="username" value="{{$user_data[0]->username}}">
        <input type="hidden" name="id_zakat" value="{{$id_zakat}}">
        <br>
        <button type="submit" class="btn btn-success">Kirim</button>
    </form>
</div>
<br><br>
@include("include/footer")
@include('include/header')
<img src="{{ URL::to('/') }}/pembayaran.png" class="img-fluid">
<br>
<div class="container">
    <div class="text-left">
      <br><br>
      <p><b>Tanggal : {{$date}}</b></p>
    </div>
  </div>
  <div class="container">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">Total Harga</th>
        <th scope="col">Rp. {{$total}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>No Invoice</th>
        <td>{{$noinv}}</td>
      </tr>
      <tr>
        <th>No Rekening</th>
        <td>{{$norek}}</td>
      </tr>
      <tr>
        <th>Metode Pembayaran</th>
        <td>{{$metode}}</td>
      </tr>
      <tr>
        <th>Nama Rekening</th>
        <td> {{$namarek}}</td>
      </tr>
    </tbody>
  </table>
  <br>
  <div class="text-right">
    <a class="btn btn-success" href="{{url("/profil/kirim_bukti_pembayaran")}}">Kirim Bukti Pembayaran</a>
  </div>
</div>
<br><br>
@include("include/footer")
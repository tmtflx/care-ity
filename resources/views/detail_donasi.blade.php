@include("include/header")
@include("include/needlogin")
<img src="{{ URL::to('/') }}/rd.png" class="img-fluid">
<div class="container">
<br><br><br>
    <div class="row">
        <div class="col-3">
            <img src="{{url($daftar_donasi->gambar)}}" style="width:100%;height:auto;">
        </div>
        <div class="col">
            <form action="{{url("/donasi/$daftar_donasi->id/".$user_data[0]->id)}}" method="post">
                @csrf
                <h3><b>{{$daftar_donasi->nama}}<b></h3>
                <br>
                <p>{{$daftar_donasi->informasi}}</p>
                <br>
                <hr>
                <div class="form-group">
                    <label>Jumlah yang akan di donasikan</label>
                    <input type="number" name="jumlahdonasi" value="1000" class="form-control">
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select name="metode_pembayaran" id="varian_select" class="custom-select my-1 mr-sm-2">
                        <option value="bankmandiri" selected>Transfer Bank Mandiri</option>
                        <option value="bankbca">Transfer Bank BCA</option>
                        <option value="bankbni">Transfer Bank BNI</option>
                        <option value="bankbjb">Transfer Bank BJB</option>
                        <option value="saldoakun">Saldo Akun (Saldo: Rp.{{$user_data[0]->saldo}})</option>
                    </select>
                </div>
                <div class="text-right">
                <button type="submit" class="btn btn-success">Donasikan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br><br>
@include("include/footer")
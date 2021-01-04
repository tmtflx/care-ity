@include('include/header')
@include("include/needlogin")
<img src="{{ URL::to('/') }}/rz.png" class="img-fluid">
<div class="container">
    <br><br>
    <form action="{{url("/zakat/proses/bayar")}}" method="post">
        @csrf
        <div class="form-group">
            <label>Jenis Zakat</label>
            <select name="jenis_zakat" id="varian_select" class="custom-select my-1 mr-sm-2">
                <option value="maal" @php if ($jenis_zakat == "maal") echo "selected" @endphp>Zakat Maal</option>
                <option value="penghasilan" @php if ($jenis_zakat == "penghasilan") echo "selected" @endphp>Zakat Penghasilan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah yang akan di bayar</label>
            <input type="number" name="jumlah" value="1000" class="form-control">
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
        <input type="hidden" name="id_muzakki" value="{{$user_data[0]->id}}">
        <div class="text-right">
            <br>
        <button type="submit" class="btn btn-success">Bayar</button>
        </div>
     
    </form>
</div>
<br><br>
@include('include/footer')
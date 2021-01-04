@include('include/header')
@include("include/needlogin")
<img src="{{ URL::to('/') }}/rpg.png" class="img-fluid">
<div class="container">
    <form action="{{url("penggalangan_dana/donasi")}}" method="post">
        @csrf

        <br><br><br>
        <div class="row">
            <div class="col-3">
                <img src="{{url($penggalangan_dana->gambar)}}" style="width:100%;height:auto;">
            </div>
            <div class="col">
                
                <h3><b>{{$penggalangan_dana->judul}}</b></h3>
               
                <br>
                <p class="text-justify">{{$penggalangan_dana->informasi}}</p>
                <br>
                <hr>
                
                <p>Pembuat : {{$penggalangan_dana->nama_pembuat}}</p>
                <p>Total Donatur : {{$penggalangan_dana->jumlah_donatur}}</p>
                <p>Dana yang terkumpulkan/dibutuhkan : Rp. {{$penggalangan_dana->dana_terkumpul}}/{{$penggalangan_dana->dana_max}}</p>
                
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
                <input type="hidden" name="id_penggalangan_dana" value="{{$penggalangan_dana->id}}">
                <input type="hidden" name="judul" value="{{$penggalangan_dana->judul}}">
                <br>
                <div class="text-right">
                <button type="submit" class="btn btn-success">Donasikan</button>
                </div>
            </div>
        </div>
    </form>
</div>
<br><br>
@include('include/footer')
@include("include/header")
@include("include/needlogin")
<img src="{{ URL::to('/') }}/rq.png" class="img-fluid">
<div class="container mt-3 mb-3">
<br><br>
    <div class="row">
        <div class="col-3">
            <img src="{{url($data_qurban->gambar)}}" width="100%" height="auto">
        </div>
        <div class="col">
            <form method="post" action="{{url("/beli/qurban")}}">
                @csrf
                <br>
                <h3><b>{{$data_qurban->nama}}</b></h3>
                <br>
                <p class="text-justify">{{$data_qurban->informasi}}</p>
                <br>
                <hr>
                <p>Harga/ekor : Rp. <span id="harga_qurban">{{$data_qurban->harga_standard}}</span></p>
                <div class="form-group">
                    <label class="my-1 mr-2" >Varian</label>
                    <select name="varian" id="varian_select" class="custom-select my-1 mr-sm-2">
                        <option value="standard" selected>Standard</option>
                        <option value="medium">Medium</option>
                        <option value="premium">Premium</option>
                        <option value="spesial">Spesial</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" value="1" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Pengqurban</label>
                    <input name="nama_pengqurban_0" class="form-control" value="{{$user_data[0]->username}}">
                    <div class="text-right">
                    <button type="button" id="tambah_nama" class="btn btn-success mt-3">Tambah nama</button>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label>Daerah Distribusi</label>
                    <select name="daerah_distribusi" id="varian_select" class="custom-select my-1 mr-sm-2">
                        <option value="Sukabirus RT01" selected>Sukabirus RT01</option>
                        <option value="Sukabirus RT02">Sukabirus RT02</option>
                        <option value="Sukabirus RT03">Sukabirus RT03</option>
                        <option value="Sukabirus RT04">Sukabirus RT04</option>
                    </select>
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
                <input type="hidden" name="id_qurban" value="{{$data_qurban->id}}">
                <input type="hidden" name="id_user" value="{{$user_data[0]->id}}">
                <input type="hidden" name="jenishewan" value="{{$data_qurban->jenis}}">
                <input type="hidden" name="informasi" value="{{$data_qurban->informasi}}">
                <input type="hidden" id="hargahewan" name="harga" value="{{$data_qurban->harga_standard}}">
                <input id="nama_pengqurban_count" type="hidden" name="nama_pengqurban_count" value="0">
                <div class="text-right">
                <button type="submit" class="btn btn-success mt-3">Qurban</button>
                </div>
                
            </form>
        </div>
    </div>
</div>



<script>
    $( "#varian_select" ).change(
        function () {
            switch($(this)[0].value)
            {
                case "standard":
                $("#harga_qurban").text("{{$data_qurban->harga_standard}}");
                $("#hargahewan").val("{{$data_qurban->harga_standard}}")
                break;
                case "medium":
                $("#harga_qurban").text("{{$data_qurban->harga_medium}}");
                $("#hargahewan").val("{{$data_qurban->harga_medium}}")
                break;
                case "premium":
                $("#harga_qurban").text("{{$data_qurban->harga_premium}}");
                $("#hargahewan").val("{{$data_qurban->harga_premium}}")
                break;
                case "spesial":
                $("#harga_qurban").text("{{$data_qurban->harga_spesial}}");
                $("#hargahewan").val("{{$data_qurban->harga_spesial}}")
                break;
            }
        }
    );
    let count_nama_qurban = 1;
    $("#tambah_nama").click(
        function() {
            $("#tambah_nama").before('<input name="nama_pengqurban_'+count_nama_qurban+'" class="form-control mt-3">');
            $("#nama_pengqurban_count").val(count_nama_qurban+1);
            count_nama_qurban++;
        }
    )
</script>
<br><br>
@include("include/footer")
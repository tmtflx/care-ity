<div class="container">
@if ($user_data[0]->role == "admin")
<h3>Qurban</h3>
<hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_qurban); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_qurban[$i]->tanggal}}</td>
                <td>{{$pembayaran_qurban[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_qurban[$i]->total}}</td>
                <td>{{$pembayaran_qurban[$i]->namapengirim}}</td>
                <td>{{$pembayaran_qurban[$i]->namapenerima}}</td>
            </tr>
    @endfor
        </tbody>
    </table>
<br>
    <h3>Donasi</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
                <!--<th scope="col">Aksi</th>-->
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_donasi); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_donasi[$i]->tanggal}}</td>
                <td>{{$pembayaran_donasi[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_donasi[$i]->total}}</td>
                <td>{{$pembayaran_donasi[$i]->namapengirim}}</td>
                <td>{{$pembayaran_donasi[$i]->namapenerima}}</td>
                <!--<td>
                    <button class="btn btn-primary">Post</button>
                </td>-->
            </tr>
    @endfor
        </tbody>
    </table>
<br>
    <h3>Penggalangan Dana</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_penggalangan_dana); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_penggalangan_dana[$i]->tanggal}}</td>
                <td>{{$pembayaran_penggalangan_dana[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_penggalangan_dana[$i]->total}}</td>
                <td>{{$pembayaran_penggalangan_dana[$i]->namapengirim}}</td>
                <td>{{$pembayaran_penggalangan_dana[$i]->namapenerima}}</td>
            </tr>
    @endfor
        </tbody>
    </table>
<br>
    <h3>Zakat</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_zakat); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_zakat[$i]->tanggal}}</td>
                <td>{{$pembayaran_zakat[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_zakat[$i]->total}}</td>
                <td>{{$pembayaran_zakat[$i]->namapengirim}}</td>
                <td>{{$pembayaran_zakat[$i]->namapenerima}}</td>
            </tr>
    @endfor
        </tbody>
    </table>
@endif
            
@if ($user_data[0]->role == "klien")
<br>
    <h3>Qurban</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_user_qurban); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_user_qurban[$i]->tanggal}}</td>
                <td>{{$pembayaran_user_qurban[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_user_qurban[$i]->total}}</td>
                <td>{{$pembayaran_user_qurban[$i]->namapengirim}}</td>
                <td>{{$pembayaran_user_qurban[$i]->namapenerima}}</td>
            </tr>
    @endfor
        </tbody>
    </table>
<br>
    <h3>Donasi</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_user_donasi); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_user_donasi[$i]->tanggal}}</td>
                <td>{{$pembayaran_user_donasi[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_user_donasi[$i]->total}}</td>
                <td>{{$pembayaran_user_donasi[$i]->namapengirim}}</td>
                <td>{{$pembayaran_user_donasi[$i]->namapenerima}}</td>
            </tr>
    @endfor
        </tbody>
    </table>
<br>
    <h3>Penggalangan Dana</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_user_penggalangan_dana); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_user_penggalangan_dana[$i]->tanggal}}</td>
                <td>{{$pembayaran_user_penggalangan_dana[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_user_penggalangan_dana[$i]->total}}</td>
                <td>{{$pembayaran_user_penggalangan_dana[$i]->namapengirim}}</td>
                <td>{{$pembayaran_user_penggalangan_dana[$i]->namapenerima}}</td>
            </tr>
    @endfor
        </tbody>
    </table>
<br>
    <h3>Zakat</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Waktu Tanggal</th>
                <th scope="col">Catatan</th>
                <th scope="col">Total</th>
                <th scope="col">Pengirim</th>
                <th scope="col">Penerima</th>
            </tr>
        </thead>
        <tbody>
    @for ($i = 0; $i < count($pembayaran_user_zakat); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$pembayaran_user_zakat[$i]->tanggal}}</td>
                <td>{{$pembayaran_user_zakat[$i]->catatan}}</td>
                <td>Rp. {{$pembayaran_user_zakat[$i]->total}}</td>
                <td>{{$pembayaran_user_zakat[$i]->namapengirim}}</td>
                <td>{{$pembayaran_user_zakat[$i]->namapenerima}}</td>
            </tr>
    @endfor
        </tbody>
    </table>
@endif
</div>
<br><br>
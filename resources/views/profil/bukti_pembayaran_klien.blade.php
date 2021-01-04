<div class="container">
    <h3>Qurban</h3>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($bukti_pembayaran); $i++)
            <tr>
                <td>{{$i}}</td>
                <td>{{$bukti_pembayaran_sudah_qurban[$i]->namapengqurban}}</td>
                <td>
                    <img src="{{url($bukti_pembayaran[$i]->gambar)}}" width="200px" height="auto">
                </td>
                <td>
                    <a href="{{url("/terima_pembayaran/".$bukti_pembayaran[$i]->id."/".$bukti_pembayaran_sudah_qurban[$i]->id)}}" class="btn btn-success">Terima</a>
                    <a href="{{url("/tolak_pembayaran/".$bukti_pembayaran[$i]->id."/".$bukti_pembayaran_sudah_qurban[$i]->id)}}" class="btn btn-danger">Tolak</a>
                </td>
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
                <th scope="col">Username</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($bukti_pembayaran_donasi); $i++)
            <tr>
                <td>{{$i}}</td>
                <td>{{$bukti_pembayaran_sudah_donasi[$i]->nama_donatur}}</td>
                <td>
                    <img src="{{url($bukti_pembayaran_donasi[$i]->gambar)}}" width="200px" height="auto">
                </td>
                <td>
                    <a href="{{url("/terima_pembayaran_donasi/".$bukti_pembayaran_donasi[$i]->id."/".$bukti_pembayaran_sudah_donasi[$i]->id)}}" class="btn btn-success">Terima</a>
                    <a href="{{url("/tolak_pembayaran_donasi/".$bukti_pembayaran_donasi[$i]->id."/".$bukti_pembayaran_sudah_donasi[$i]->id)}}" class="btn btn-danger">Tolak</a>
                </td>
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
                <th scope="col">Username</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($bukti_pembayaran_penggalangan_dana); $i++)
            <tr>
                <td>{{$i}}</td>
                <td>{{$bukti_pembayaran_penggalangan_dana[$i]->username}}</td>
                <td>
                    <img src="{{url($bukti_pembayaran_penggalangan_dana[$i]->gambar)}}" width="200px" height="auto">
                </td>
                <td>
                    <a href="{{url("/terima_pembayaran_penggalangan_dana/".$bukti_pembayaran_penggalangan_dana[$i]->id."/".$bukti_pembayaran_penggalangan_dana[$i]->id_penggalangan_dana)}}" class="btn btn-success">Terima</a>
                    <a href="{{url("/tolak_pembayaran_penggalangan_dana/".$bukti_pembayaran_penggalangan_dana[$i]->id."/".$bukti_pembayaran_penggalangan_dana[$i]->id_penggalangan_dana)}}" class="btn btn-danger">Tolak</a>
                </td>
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
                <th scope="col">Username</th>
                <th scope="col">Jenis Zakat</th>
                <th scope="col">Gambar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($bukti_pembayaran_zakat); $i++)
            <tr>
                <td>{{$i}}</td>
                <td>{{$bukti_pembayaran_zakat[$i]->username}}</td>
                <td>{{$bukti_pembayaran_zakat[$i]->jenis_zakat}}</td>
                <td>
                    <img src="{{url($bukti_pembayaran_zakat[$i]->gambar)}}" width="200px" height="auto">
                </td>
                <td>
                    <a href="{{url("/terima_pembayaran_zakat/".$bukti_pembayaran_zakat[$i]->id."/".$bukti_pembayaran_zakat[$i]->id_zakat)}}" class="btn btn-success">Terima</a>
                    <a href="{{url("/tolak_pembayaran_zakat/".$bukti_pembayaran_zakat[$i]->id."/".$bukti_pembayaran_zakat[$i]->id_zakat)}}" class="btn btn-danger">Tolak</a>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
<br><br>
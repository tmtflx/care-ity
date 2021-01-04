<div class="container">
    <h3>Qurban</h3>
    <hr>
    <table class="table" style="border: 1px solid silver;">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Jenis Hewan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga Total</th>
            <th scope="col">Daerah Distribusi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
@for ($i = 0; $i < count($bukti_qurban_belum); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$bukti_qurban_belum[$i]->jenishewan}}</td>
                <td>{{$bukti_qurban_belum[$i]->jumlah}}</td>
                <td>Rp. {{$bukti_qurban_belum[$i]->total}}</td>
                <td>{{$bukti_qurban_belum[$i]->daerahdistribusi}}</td>
                <td>
                    <a href="{{url("/kirim_bukti_pembayaran/".$bukti_qurban_belum[$i]->id)}}" class="btn btn-success">Kirim Bukti</a>
                    <a href="{{url("/bukti/qurban/batal/".$bukti_qurban_belum[$i]->id)}}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
@endfor
        </tbody>
      </table>
      <br>
      <h3>Donasi</h3>
      <hr>
      <table class="table" style="border: 1px solid silver;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Donasi</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
  @for ($i = 0; $i < count($donasi_bukti_belum); $i++)
              <tr>
                  <th scope="row">{{$i}}</th>
                  <td>{{$donasi_bukti_belum[$i]->nama_donatur}}</td>
                  <td>Rp.{{$donasi_bukti_belum[$i]->total_donasi}}</td>
                  <td>
                      <a href="{{url("/kirim_bukti_pembayaran_donasi/".$donasi_bukti_belum[$i]->id)}}" class="btn btn-success">Kirim Bukti</a>
                      <a href="{{url("/bukti/donasi/batal/".$donasi_bukti_belum[$i]->id)}}" class="btn btn-danger">Batal</a>
                  </td>
              </tr>
  @endfor
          </tbody>
        </table>
        <br>
      <h3>Penggalangan Dana</h3>
      <hr>
      <table class="table" style="border: 1px solid silver;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
  @for ($i = 0; $i < count($penggalangan_dana_user_belum); $i++)
              <tr>
                  <th scope="row">{{$i}}</th>
                  <td>{{$penggalangan_dana_user_belum[$i]->judul}}</td>
                  <td>Rp.{{$penggalangan_dana_user_belum[$i]->total}}</td>
                  <td>
                      <a href="{{url("/kirim_bukti_pembayaran_penggalangan_dana/".$penggalangan_dana_user_belum[$i]->id)}}" class="btn btn-success">Kirim Bukti</a>
                      <a href="{{url("/bukti/penggalangan_dana/batal/".$penggalangan_dana_user_belum[$i]->id)}}" class="btn btn-danger">Batal</a>
                  </td>
              </tr>
  @endfor
          </tbody>
        </table>
        <br>
        <h3>Zakat</h3>
        <hr>
        <table class="table" style="border: 1px solid silver;">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis Zakat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
    @for ($i = 0; $i < count($zakat_user_belum); $i++)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$zakat_user_belum[$i]->jenis_zakat}}</td>
                    <td>Rp.{{$zakat_user_belum[$i]->total}}</td>
                    <td>
                        <a href="{{url("/kirim_bukti_pembayaran_zakat/".$zakat_user_belum[$i]->id)}}" class="btn btn-success">Kirim Bukti</a>
                        <a href="{{url("/bukti/zakat/batal/".$zakat_user_belum[$i]->id)}}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
    @endfor
            </tbody>
          </table>
</div>
<br><br>
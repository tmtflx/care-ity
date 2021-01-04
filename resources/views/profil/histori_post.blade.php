<div class="container">
  <h3>Penggalangan Dana</h3>
  <hr>
  <table class="table" style="border: 1px solid silver;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nama Penerima</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Gambar</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < count($penggalangan_dana_post); $i++)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$penggalangan_dana_post[$i]->tanggal}}</td>
            <td>{{$penggalangan_dana_post[$i]->nama_penerima}}</td>
            <td>Rp.{{$penggalangan_dana_post[$i]->jumlah}}</td>
            <td>
                <img src="{{url($penggalangan_dana_post[$i]->gambar)}}" width="100px" height="auto">
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
          <th scope="col">Tanggal</th>
          <th scope="col">Nama Penerima</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Gambar</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < count($donasi_post); $i++)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$donasi_post[$i]->tanggal}}</td>
            <td>{{$donasi_post[$i]->nama_penerima}}</td>
            <td>Rp.{{$donasi_post[$i]->jumlah}}</td>
            <td>
                <img src="{{url($donasi_post[$i]->gambar)}}" width="100px" height="auto">
            </td>
        </tr>
        @endfor
      </tbody>
  </table>
</div>
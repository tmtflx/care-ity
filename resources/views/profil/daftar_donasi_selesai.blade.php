<div class="container">
  <h3>Penggalangan Dana</h3>
  <hr>
  <table class="table" style="border: 1px solid silver;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Nama</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < count($penggalangan_dana_selesai); $i++)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$penggalangan_dana_selesai[$i]->judul}}</td>
            <td>{{$penggalangan_dana_selesai[$i]->nama_pembuat}}</td>
            <td>Rp.{{$penggalangan_dana_selesai[$i]->dana_terkumpul}}</td>
            <td>
                <a href="{{url("/penggalangan_dana/form_post/".$penggalangan_dana_selesai[$i]->id)}}" class="btn btn-success">Post</a>
            </td>
        </tr>
        @endfor
      </tbody>
  </table>
  <!--<h3>Donasi</h3>
  <hr>
  <table class="table" style="border: 1px solid silver;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < count($donasi_selesai); $i++)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$donasi_selesai[$i]->nama}}</td>
            <td>Rp. {{$donasi_selesai[$i]->dana_terkumpul}}</td>
            <td>
                <a href="{{url("/donasi/form_post/".$donasi_selesai[$i]->id)}}" class="btn btn-primary">Post</a>
            </td>
        </tr>
        @endfor
      </tbody>
  </table>-->
</div>
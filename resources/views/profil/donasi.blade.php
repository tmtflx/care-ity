<div class="container">
    <div class="text-right">
    <a href="{{url("/donasi/form")}}" class="btn btn-success">Buat Donasi</a>
    </div>
    
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($daftar_donasi); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$daftar_donasi[$i]->nama}}</td>
                <td>
                    <a href="{{url("donasi/hapus/".$daftar_donasi[$i]->id)}}" class="btn btn-danger">Hapus</a>
                    <a href="{{url("donasi/edit/".$daftar_donasi[$i]->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url("/donasi/form_post/".$daftar_donasi[$i]->id)}}" class="btn btn-success">Post</a>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
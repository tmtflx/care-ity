<div class="container">
    <div class="text-right">
    <a href="{{url("/penggalangan_dana/form")}}" class="btn btn-success">Buat Penggalangan Dana</a>
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
            @for ($i = 0; $i < count($penggalangan_dana_user); $i++)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$penggalangan_dana_user[$i]->judul}}</td>
                <td>
                    <a href="{{url("penggalangan_dana/hapus/".$penggalangan_dana_user[$i]->id)}}" class="btn btn-danger">Hapus</a>
                    <a href="{{url("penggalangan_dana/edit/".$penggalangan_dana_user[$i]->id)}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
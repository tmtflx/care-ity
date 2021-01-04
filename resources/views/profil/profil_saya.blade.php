<div class="container">
    <div class="form-group">
        <label>Username</label>
        <input class="form-control" value="{{$user_data[0]->username}}" readonly>
    </div>
    <div class="form-group">
        <label>Role</label>
        <input class="form-control" value="{{$user_data[0]->role}}" readonly>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" value="{{$user_data[0]->email}}" readonly>
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input class="form-control" value="{{$user_data[0]->nohp}}" readonly>
    </div>
    <div class="form-group">
        <label>Saldo</label>
        <input class="form-control" value="Rp. {{$user_data[0]->saldo}}" readonly>
    </div>
<div class="text-right">
<a href="{{url("/profil/edit_profil/")}}" class="btn btn-success">Edit Profil</a>
</div>
</div>

<br><br>
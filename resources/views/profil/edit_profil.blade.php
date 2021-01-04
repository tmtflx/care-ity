<div class="container">
    <form action="{{url("/edit_profil")}}" method="post">
        @csrf
        <div class="form-group">
            <label>Username</label>
            <input name="username" class="form-control" value="{{$user_data[0]->username}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" value="{{$user_data[0]->email}}">
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input name="nohp" class="form-control" value="{{$user_data[0]->nohp}}">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" name="repassword" class="form-control">
        </div>
        <input type="hidden" name="id" value="{{$user_data[0]->id}}">
        <div class="text-right">
        <button type="submit" class="btn btn-success">Edit</button>
        </div>
        
    </form>
</div>

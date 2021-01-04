@include("include/header")
<img src="daftar.png" class="img-fluid">
<div class="container mt-3 mb-3">
<br>
@if (app("request")->input("type") == "error")
    <div class="alert alert-danger" role="alert">
      {{app("request")->input("msg")}}
    </div>
@endif

@if (app("request")->input("type") == "success")
    <div class="alert alert-success" role="alert">
      @if (app("request")->input("msg") == "Berhasil register, silahkan login")
      Berhasil register, silahkan <a href="{{url("/login")}}">login</a>
      @endif
    </div>
@endif

    <form action="{{url("/auth/register")}}" method="post">
      @csrf
      <br>
        <h1 style="color:#295A48"><b>Halo, Silahkan bergabung</b></h1>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nomor Telepon</label>
          <input name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor telepon">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Konfirmasi Password</label>
          <input name="repassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>
<br>
@include("include/footer")
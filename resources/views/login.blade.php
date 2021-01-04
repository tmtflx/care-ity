@include("include/header")
<img src="masuk.png" class="img-fluid">  
<div class="container mt-3 mb-3">
  
@if (app("request")->input("type") == "error")
    <div class="alert alert-danger" role="alert">
    {{app("request")->input("msg")}}
    </div>
@endif

@if (app("request")->input("type") == "success")
    <div class="alert alert-success" role="alert">
    {{app("request")->input("msg")}}
    </div>
@endif

    <form action="{{url("/auth/login")}}" method="post">
        @csrf
        <br><br>
        <h1 style="color:#295A48"><b>Halo, Selamat datang kembali</b></h1>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan username">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>
<br>
@include("include/footer")
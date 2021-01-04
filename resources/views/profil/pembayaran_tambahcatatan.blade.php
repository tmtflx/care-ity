@include('include/header')
<img src="{{ URL::to('/') }}/kf.png" class="img-fluid">
<br><br>
<div class="container">
    <form action="{{url("/catatantambah")}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tambah Catatan Pembayaran</label>
            <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="hidden" name="uniq" value="{{$uniq}}">
        <div class="text-right">
        <button type="submit" class="btn btn-success">Submit</button>
        </div >
    </form>
</div>
<br><br>
@include("include/footer")
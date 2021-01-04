@include("include/header")
<img src="{{ URL::to('/') }}/pf.png" class="img-fluid">
<br><br>
<div class="container">
    <div class="row">
        <div class="col-3">
@if ($hal == "profil_saya")
            <a class="btn btn-success w-100">Profil Saya</a>
@else
            <a href="{{url("/profil/profil_saya")}}" class="btn btn-light w-100">Profil Saya</a>
@endif

@if ($user_data[0]->role == "klien")
    @if ($hal == "kirim_bukti_pembayaran")
            <a class="btn btn-success w-100">Kirim Bukti Pembayaran</a>
    @else
            <a href="{{url("/profil/kirim_bukti_pembayaran")}}" class="btn btn-light w-100">Kirim Bukti Pembayaran</a>
    @endif
@endif

@if ($user_data[0]->role == "admin")
    @if ($hal == "bukti_pembayaran_klien")
            <a class="btn btn-success w-100">Bukti Pembayaran Klien</a>
    @else
            <a href="{{url("/profil/bukti_pembayaran_klien")}}" class="btn btn-light w-100">Bukti Pembayaran Klien</a>
    @endif
@endif

@if ($hal == "history_pembayaran")
            <a class="btn btn-success w-100">Riwayat Pembayaran</a>
@else
            <a href="{{url("/profil/history_pembayaran")}}" class="btn btn-light w-100">Riwayat Pembayaran</a>
@endif

@if ($hal == "penggalangan_dana")
            <a class="btn btn-success w-100">Penggalangan Dana</a>
@else
            <a href="{{url("/profil/penggalangan_dana")}}" class="btn btn-light w-100">Penggalangan Dana</a>
@endif

@if ($user_data[0]->role == "admin")
    @if ($hal == "donasi")
            <a class="btn btn-success w-100">Donasi</a>
    @else
            <a href="{{url("/profil/donasi")}}" class="btn btn-light w-100">Donasi</a>
    @endif
@endif

@if ($user_data[0]->role == "admin")
    @if ($hal == "daftar_donasi_selesai")
            <a class="btn btn-success w-100">Penggalangan Dana Selesai</a>
    @else
            <a href="{{url("/profil/daftar_donasi_selesai")}}" class="btn btn-light w-100">Penggalangan Dana Selesai</a>
    @endif
@endif

@if ($user_data[0]->role == "admin")
    @if ($hal == "histori_post")
            <a class="btn btn-success w-100">Riwayat Post</a>
    @else
            <a href="{{url("/profil/histori_post")}}" class="btn btn-light w-100">Riwayat Post</a>
    @endif
@endif
        </div>
        <div class="col">
@if ($hal == "kirim_bukti_pembayaran")
@include("profil.kirim_bukti_pembayaran")
@endif
@if ($hal == "profil_saya")
@include("profil.profil_saya")
@endif
@if ($hal == "bukti_pembayaran_klien")
@include("profil.bukti_pembayaran_klien")
@endif
@if ($hal == "history_pembayaran")
@include("profil.history_pembayaran")
@endif
@if ($hal == "penggalangan_dana")
@include("profil.penggalangan_dana")
@endif
@if ($hal == "daftar_donasi_selesai")
@include("profil.daftar_donasi_selesai")
@endif
@if ($hal == "histori_post")
@include("profil.histori_post")
@endif
@if ($hal == "donasi")
@include("profil.donasi")
@endif
@if ($hal == "edit_profil")
@include("profil.edit_profil")
@endif
        </div>
    </div>
</div>
@include("include/footer")
@include("include/header")
<div>
    <div>
        <img src="pg.png" class="img-fluid">
    </div>
</div>
<br><br>
<div class="container text-left">
    <div>
        <p class="lead">

        </p>
    </div>
    <h1 style="color:#295A48" class="text-center"><b>Program Pilihan</b></h1>
    <p class="text-center">Care-ity adalah salah satu wadah yang tepat untuk berdonasi.
        Melalui Care-ity, kamu dapat membantu orang-orang yang membutuhkan biaya pengobatan, ataupun membantu pendidikan anak-anak yang putus sekolah.
        Kamu bisa membantu berbagai misi sosial tanpa perlu bertatap muka secara langsung.
        kamu dapat mendonasikan dengan jumlah yang seiklashnya karena berapapun dana yang kamu berikan akan berarti bagi orang yang membutuhkan.</p>
    <br><br>
    <div class="row row-cols-1 row-cols-md-3" style="font-family:   sans-serif;">
        @for ($i = 0; $i < count($penggalangan_dana); $i++) <div class="col mb-4">
            <div class="card h-100">
                <img src="{{$penggalangan_dana[$i]->gambar}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <b>
                        <p class="card-title">{{$penggalangan_dana[$i]->judul}}</p>
                    </b>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: {{$penggalangan_dana[$i]->dana_terkumpul/$penggalangan_dana[$i]->dana_max*100}}%" aria-valuenow="{{$penggalangan_dana[$i]->dana_terkumpul}}" aria-valuemin="0" aria-valuemax="{{$penggalangan_dana[$i]->dana_max}}"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <p class="text"> Terkumpul Rp.{{$penggalangan_dana[$i]->dana_terkumpul}}</p>
                            <p class="text"> Donatur {{$penggalangan_dana[$i]->jumlah_donatur}}</p>
                        </div>
                        <div class="col text-right">
                            <br>
                            <a href="{{url("/penggalangan_dana/donasi/".$penggalangan_dana[$i]->id)}}" class="btn btn-success text">Donasikan</a>
                        </div>

                    </div>
                </div>
            </div>

    </div>
    @endfor
    <!--<div class="col mb-4">
                <div class="card h-100">
                    <img src="donasi1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-title">Zohdi, Yatim Kecil Ini Putus Sekolah Demi Rawat Ibu Dan Adik Yang
                                Sakit.</p>
                        </b>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <div>
                            <p class="text"> Terkumpul Rp.14.498.596</p>
                            <p class="text-right"> Donatur 5</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="donasi2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-title">Ibu Berjuang Sendiri, Ayah Terbaring Sakit Dan Aku Lumpuh Otak Sejak Kecil.</p>
                        </b>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <div>
                            <p class="text"> Terkumpul Rp.14.498.596</p>
                            <p class="text-right"> Donatur 20</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="donasi3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-title">Bantu Kakek Efendi Pedagang Pempek Keliling di Masa Covid.</p>
                        </b>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <div>
                            <p class="text"> Terkumpul Rp.14.498.596</p>
                            <p class="text-right"> Donatur 35</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="donasi4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-title">Sarti Ingin Kembali Sekolah Dan Berhenti Jadi Buruh Tani.</p>
                        </b>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <div>
                            <p class="text"> Terkumpul Rp.14.498.596</p>
                            <p class="text-right"> Donatur 35</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="donasi5.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-title">Kisah Juang Sepasang Lansia Hidupi Cucu Yatim Piatu Disabilitas.</p>
                        </b>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <div>
                            <p class="text"> Terkumpul Rp.14.498.596</p>
                            <p class="text-right"> Donatur 40</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="donasi6.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <b>
                            <p class="card-title">Bantu Nenek Kusni Hidupi Cucu Sebatang Kara.</p>
                        </b>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <div>
                            <p class="text"> Terkumpul Rp.14.498.596</p>
                            <p class="text-right"> Donatur 50</p>
                        </div>
                    </div>
                </div>
            </div>-->
</div>
<hr class="featurette-divider">
</div>

<br><br><br>
<h4 class="mt-4 text-center">Berbagi bukan tentang seberapa besar dan seberapa berharganya hal yang kau beri,</h4>
<h4 class="mt-4 text-center">namun seberapa tulus dan ikhlasnya apa yang ingin kau beri.</h4>
<br><br><br>

@include("include/footer");
@include("include/header")
<div>
    <div>
        <img src="zk.png" class="img-fluid">
    </div>

    <div class="container text-justify" style="padding-left: 15px; padding-right: 15px;">
        <br><br><br>
        <h1 style="color:#295A48" class="text-center"><b>Pendahuluan</b></h1>
        <br><br>
        <p class="lead">
            Zakat adalah harta yang wajib dikeluarkan apabila telah memenuhi syarat – syarat yang telah
            ditentukan oleh agama,
            dan disalurkan kepada orang–orang yang telah ditentukan pula, yaitu delapan golongan yang berhak
            menerima zakat
            sebagaimana yang tercantum dalam Al-Qur’an surat At-Taubah ayat 60 :
        </p>
        <img src="ayatzakat.jpeg" class="card-img-top" alt="...">
        <br><br>
        <p class="lead">Zakat bermakna Al-Barakatu, yang artinya berkah. Makna ini menegaskan bahwa orang yang
            selalu membayar
            zakat, hartanya akan
            selalu dilimpahkan keberkahan oleh Allah SWT, kemudian keberkahan harta ini akan berdampak kepada
            keberkahan
            hidup. Keberkahan ini lahir karena harta yang kita gunakan adalah harta yang suci dan bersih, sebab
            harta
            kita telah dibersihkan dari kotoran dengan menunaikan zakat yang hakekatnya zakat itu sendiri
            berfungsi
            untuk membersihkan dan mensucikan harta.</p>
        <br>
        <hr class="featurette-divider">
        <br>
        <h1 style="color:#295A48" class="text-center"><b>Zakat</b></h1>
        <p class="mt-4 text-center">Care-ity bekerja sama dengan PT.SI4207 untuk mengumpulkan dan menyalurkan zakat
            pada mereka yang membutuhkan.</p>
        <br>

        <div class="container text-center">
            <div class="row">
                <div class="col-sm">
                    <form action="{{url("/zakat/bayar/penghasilan")}}">
                        @csrf
                        <input type="image" src="buttonzakat1.png" width="250" height="60">
                    </form>
                </div>
                <div class="col-sm">
                    <form action="{{url("/zakat/bayar/maal")}}">
                        @csrf
                        <input type="image" src="buttonzakat2.png" width="250" height="60">
                    </form>
                </div>
                <div class="col-sm">
                    <form action="{{url("/zakat/kalkulator")}}">
                        @csrf
                        <input type="image" src="buttonzakat3.png" width="250" height="60">
                    </form>
                </div>
                
            </div>
        </div>
        <br>
        <hr class="featurette-divider">
    </div>
</div>
<br>
<br>
<br>
<h4 class="mt-4 text-center">Harta yang kita zakatkan dengan ikhlas di jalan yang benar tidak akan berkurang,</h4>
<h4 class="mt-4 text-center">Melainkan bertambah dengan berkali-kali lipat.</h4>
<br><br><br>
@include("include/footer")
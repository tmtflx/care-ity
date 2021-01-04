@include('include/header')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Gambar1.png">
                </div>
                <div class="carousel-item">
                    <img src="Gambar2.png">
                </div>
                <div class="carousel-item">
                    <img src="Gambar3.png">
                </div>
                <div class="carousel-item">
                    <img src="Gambar4.png">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><br><br>
    <div class="container text-center">
        <h1 style="color:#295A48"><b>Mengapa Harus Care-ity?</b></h1>
        <p>Care-ity memudahkan Anda dalam melakukan aksi sosial untuk orang yang membutuhkan, namun mengapa harus Care-ity?</p>
        <br><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="ts.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Tepat Sasaran</b></h5>
                        <p class="card-text">Dana yang terkumpul akan disalurkan secara langsung ke penerima manfaat.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="tp.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Transparan</b></h5>
                        <p class="card-text">Setiap transaksi dan distribusi donasi dapat dilihat melalui halaman Riwayat.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="tu.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>Terupdate</b></h5>
                        <p class="card-text">Care-ity akan memberikan update mengenai penerima manfaat setelah menerima dana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<img src="jtb.png" class="img-fluid">
    <br><br><br>
@include("include/footer");
@include("include/header")
<div>
  <div>
    <img src="qb.png" class="img-fluid">
  </div>
</div>

<div class="container text-justify" style="padding-left: 15px; padding-right: 15px;">
  <br><br><br>
  <h1 style="color:#295A48" class="text-center"><b>Pendahuluan</b></h1>
  <br><br>
  <p class="lead">
    Care-ity Qurban menyediakan hewan Qurban berkualitas baik, yang bersumber dari para peternak local dan juga
    mitra peternakan terpercaya. Pada penggalan ayat Quran dibawah ini, Allah mengisyaratkan bahwa selain salat, umat
    Islam dianjurkan untuk berqurban. Dalam hal ini, menyembelih hewan sebagai bentuk rasa syukur kepada
    Allah sebagaimana yang tercantum dalam Al-Qur’an surat Al-Hajj ayat 36 :
    <br><br>
    <img src="ayatqurban.jpg" class="card-img-top" alt="...">
    <br><br>
    Selain sahabat melaksanakan ibadah qurban, Sahabat juga bisa membantu memberdayakan para peternak lokal. Insya
    Allah, hewan kurban yang diamanahkan dan dikirimkan oleh para dermawan Indonesia,
    Labbaik, Berqurban Terbaik!
    Kala umat manusia diuji Allah dengan pandemi, ekonomi ambruk, nafkah kian sulit dicari, kebutuhan sehari-hari
    sulit dipenuhi. Maka daging Qurban menjadi hidangan nikmat yang dinanti-nanti.
  </p>
  <br>
  <hr class="featurette-divider">
  <br>
  <h1 style="color:#295A48" class="text-center"><b>Alur Qurban</b></h1>
  <img src="Langkah.png" class="img-fluid">
  <hr class="featurette-divider">
  <br>
  <h1 style="color:#295A48" class="text-center"><b>Pilih Hewan Qurban</b></h1>
  <p class="text-center">Pilih hewan qurban yang tepat untuk anda qurbankan</p>
  <br>
</div>
<div class="container text-center" style="padding-left: 15px; padding-right: 15px;">
  <div class="row">
    <div class="col-sm">
      <form method="get" action="{{url("/beli_qurban/1")}}">
        @csrf
        <input type="image" src="Unta.png" width="250" height="360">
      </form>
    </div>
    <div class="col-sm">
      <form method="get" action="{{url("/beli_qurban/2")}}">
        @csrf
        <input type="image" src="Sapi.png" width="250" height="360">
      </form>
    </div>
    <div class="col-sm">
      <form method="get" action="{{url("/beli_qurban/3")}}">
        @csrf
        <input type="image" src="Kambing.png" width="250" height="360">
      </form>
    </div>
  </div>
  <br>
  <hr class="featurette-divider">
</div>
<br>

<br>
<br>
<h4 class="mt-4 text-center">Berqurbanlah, karena disetiap helai bulu hewan yang kamu kurbankan</h4>
<h4 class="mt-4 text-center"> ada kebaikan dan pahala yang akan menantimu di akhirat kelak.</h4>
<br><br><br>
@include("include/footer")
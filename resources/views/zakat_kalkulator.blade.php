@include('include/header')
<img src="{{ URL::to('/') }}/kz.png" class="img-fluid">
<div class="container">
<p></p>
  <br><br>
  <div class="row">
    <div class="col text-justify">
    <h1 style="color:#295A48" class="text-center"><b>Zakat Penghasilan</b></h1>
    <br>
      <p>Zakat penghasilan atau yang dikenal juga sebagai zakat profesi adalah bagian dari zakat maal yang wajib dikeluarkan atas harta yang berasal dari pendapatan / penghasilan rutin dari pekerjaan yang tidak melanggar syariah. Nishab zakat penghasilan sebesar 85 gram emas per tahun. Kadar zakat penghasilan senilai 2,5%. Dalam praktiknya, zakat penghasilan dapat ditunaikan setiap bulan dengan nilai nishab per bulannya adalah setara dengan nilai seperduabelas dari 85 gram emas, dengan kadar 2,5%. Jadi apabila penghasilan setiap bulan telah melebihi nilai nishab bulanan, maka wajib dikeluarkan zakatnya sebesar 2,5% dari penghasilannya tersebut. (Sumber: Al Qur'an Surah Al Baqarah ayat 267, Peraturan Menteri Agama Nomer 31 Tahun 2019, Fatwa MUI Nomer 3 Tahun 2003, dan pendapat Shaikh Yusuf Qardawi).</p>
    </div>
    <div class="col text-justify">
      <h1 style="color:#295A48" class="text-center"><b>Zakat Maal</b></h1>
      <br>
      <p>
        Zakat maal yang dimaksud dalam perhitungan ini adalah zakat yang dikenakan atas uang, emas, surat berharga, dan aset yang disewakan. Tidak termasuk harta pertanian, pertambangan, dan lain-lain yang diatur dalam UU No.23/2011 tentang pengelolaan zakat. Zakat maal harus sudah mencapai nishab (batas minimum) dan terbebas dari hutang serta kepemilikan telah mencapai 1 tahun (haul). Nishab zakat maal sebesar 85 gram emas. Kadar zakatnya senilai 2,5%. (Sumber: Al Qur'an Surah Al Baqarah ayat 267, Peraturan Menteri Agama Nomer 31 Tahun 2019, Fatwa MUI Nomer 3 Tahun 2003, dan pendapat Shaikh Yusuf Qardawi)..
      </p>
      <p>Standar harga emas yg digunakan untuk 1 gram nya adalah Rp800.000,-. Sementara nishab yang digunakan adalah sebesar 85 gram emas.
      </p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Rp.</span>
        </div>
        <input id="ppb" type="number" class="form-control" placeholder="Pendapatan / Bulan">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Rp.</span>
        </div>
        <input id="thr" type="number" class="form-control" placeholder="Bonus, THR dan lainnya">
      </div>
      <div class="text-right">
        <button id="btnHitungPenghasilan" class="btn btn-success mb-3">Hitung</button>
      </div>
    </div>
    <div class="col">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Rp.</span>
        </div>
        <input id="ppb1" type="number" class="form-control" placeholder="Nilai emas, perak, dan/atau permata">
      </div>
      <div class="text-right">
        <button id="btnHitungPenghasilan1" class="btn btn-success mb-3">Hitung</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <p>Hasil</p>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Rp.</span>
        </div>
        <input type="number" id="penghasilan" class="form-control" placeholder="Hasil" readonly>
      </div>
    </div>
    <div class="col">
      <p>Hasil</p>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Rp.</span>
        </div>
        <input type="number" id="penghasilan1" class="form-control" placeholder="Hasil" readonly>
      </div>
    </div>
  </div>
</div>
<br><br>
<script>
      $("#btnHitungPenghasilan").click(function() {
        let hasil = 2.5 / 100 * (parseInt($("#ppb").val()) + parseInt($("#thr").val()))
        $("#penghasilan").val(hasil);
      })
      $("#btnHitungPenghasilan1").click(function() {
        let hasil = 2.5 / 100 * (parseInt($("#ppb1").val()))
        $("#penghasilan1").val(hasil);
      })
    </script>
@include('include/footer')
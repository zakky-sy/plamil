<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="style/rencanaku_style.css">
  <title>Plamil</title>
</head>

<body>
  <?php
    include_once 'db_connection.php';
  ?>

  <!-- Navbar -->
  <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link menubar" href="index.php">Beranda</a>
          <a class="nav-link menubar active" aria-current="page" href="rencanaku.php">Rencanaku</a>
          <a class="nav-link menubar" href="#">Profil</a>
          <a class="nav-link menubar" href="#">Tentang</a>
        </div>
        <div class="navbar-nav ms-auto">
          <a class="nav-link akun pe-0" id="hai" href="#">Hai, Muzakky</a>
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
            class="bi bi-person-circle icon-blue" id="haicon" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Track -->
  <div class="track">
    <div class="container text-center">
      <div class="row justify-content-center" id="track1">
        <div class="col-lg-5">
          <img src="img/track1.png" alt="Track1" class="img-fluid">
        </div>
      </div>
      <div class="row justify-content-center" id="track2">
        <div class="col-lg-5 mx-auto">
          <img src="img/track2.png" alt="Track1" class="img-fluid">
        </div>
      </div>
      <div class="row justify-content-center" id="track3">
        <div class="col-lg-5 mx-auto">
          <img src="img/track3.png" alt="Track3" class="img-fluid">
        </div>
      </div>
      <div class="row justify-content-center" id="track4">
        <div class="col-lg-5 mx-auto">
          <img src="img/track4.png" alt="Track4" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Track -->

  <!-- Cari -->
  <section class="cari py-5" id="cari">
    <div class="container">
      <div class="row pb-4 judul justify-content-center">
        <div class="col-md-auto text-center">
          <h5 class="fs-5 fw-normal">Saring hasil pencarian<br>berdasarkan kebutuhanmu</h5>
          <hr>
        </div>
      </div>
      <form method="POST">
        <div class="row justify-content-center text-center">
          <div class="col-lg-3 mt-3">
            <label class="fw-bold fs-6 mb-2" for="harga">Maks Biaya</label>
            <select name="harga" id="harga" class="form-select fs-6" aria-label="Default select example">
              <option selected>Pilih...</option>
              <option value="1">Rp. 100.000,-</option>
              <option value="2">Rp. 150.000,-</option>
              <option value="3">Rp. 200.000,-</option>
              <option value="4">Tidak Ada</option>
            </select>
          </div>
          <div class="col-lg-3 mt-3">
            <label class="fw-bold fs-6 mb-2" for="bahan">Jenis Bahan</label>
            <select name="bahan" id="bahanId" class="form-select fs-6" aria-label="Default select example">
              <option selected>Pilih...</option>
              <option value="1">Kentang</option>
              <option value="2">Tempe</option>
              <option value="3">Bayam</option>
              <option value="4">Semua</option>
            </select>
          </div>
          <div class="col-lg-3 mt-3">
            <label class="fw-bold fs-6 mb-2" for="kebutuhan">Kebutuhan Khusus</label>
            <select name="kebutuhan" id="kebutuhan" class="form-select fs-6" aria-label="Default select example">
              <option selected>Pilih...</option>
              <option value="1">Vegetarian</option>
              <option value="2">Vegan</option>
              <option value="3">Tidak Ada</option>
            </select>
          </div>
          <div class="col-lg-3 mt-3">
            <label class="fw-bold fs-6 mb-2" for="alergi">Alergi</label>
            <select name="alergi" id="alergi" class="form-select fs-6" aria-label="Default select example">
              <option selected>Pilih...</option>
              <option value="1">Makanan Laut</option>
              <option value="2">Protein Hewani</option>
              <option value="3">Susu</option>
              <option value="4">Tidak Ada</option>
            </select>
          </div>
        </div>
      </form>
      <div class="row justify-content-center text-center my-3">
        <div class="col-lg-2">
          <button class="btn btn-primary px-5" type="button" id="btncari" tabindex="-1" aria-hidden="true"
            onclick="cari()" disabled>Cari</button>
        </div>
      </div>
  </section>
  <!-- Akhir Cari -->

  <!-- Daftar Makanan -->
  <div class="daftar-makanan py-5" id="daftar-makanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 py-3 vegetarian tempe" id="kripik-tempe">
          <div class="card shadow">
            <img src="img/kripik_tempe.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">KRIPIK TEMPE GURIH</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 8.000,-</li>
              <li class="list-group-item py-0">35 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="sop-bayam">
          <div class="card shadow">
            <img src="img/sop-bayam.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SOP BAYAM SEGAR</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 12.000,-</li>
              <li class="list-group-item py-0">68 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian kentang" id="mashed-potatoes">
          <div class="card shadow">
            <img src="img/mashed-potatoes.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">MASHED POTATOES</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 6.000,-</li>
              <li class="list-group-item py-0">25 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="sambel-tempe-kemanggi">
          <div class="card shadow">
            <img src="img/sambel-tempe-kemanggi.jpeg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SAMBEL TEMPE KEMANGGI</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 10.000,-</li>
              <li class="list-group-item py-0">20 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="sop-bayam-bening">
          <div class="card shadow">
            <img src="img/sop-bayam-bening.jpeg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SOP BAYAM BENING</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 8.000,-</li>
              <li class="list-group-item py-0">10 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="sayur-bayam-jagung-kuah-santan">
          <div class="card shadow">
            <img src="img/sayur-bayam-jagung-kuah-santan.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SAYUR BAYAM JAGUNG</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 14.000,-</li>
              <li class="list-group-item py-0">12 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="tempe-kukus">
          <div class="card shadow">
            <img src="img/tempe-kukus.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">TEMPE KUKUS NIKMAT</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 8.000,-</li>
              <li class="list-group-item py-0">35 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian kentang" id="kentang-goreng">
          <div class="card shadow">
            <img src="img/kentang-goreng.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">KENTANG GORENG</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 8.000,-</li>
              <li class="list-group-item py-0">75 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="tempe-sambel-penyet">
          <div class="card shadow">
            <img src="img/tempe-sambel-penyet.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">TEMPE SAMBEL PENYET</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 8.000,-</li>
              <li class="list-group-item py-0">50 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="bayam-saus-kecap">
          <div class="card shadow">
            <img src="img/bayam-saus-kecap.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">BAYAM SAUS KECAP</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 5.000,-</li>
              <li class="list-group-item py-0">45 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="sambel-tempe-pedas">
          <div class="card shadow">
            <img src="img/sambal-tempe-pedas.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SAMBEL TEMPE PEDAS</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 15.000,-</li>
              <li class="list-group-item py-0">20 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian kentang" id="nugget-kentang">
          <div class="card shadow">
            <img src="img/kentang-goreng-nugget-kentang.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">NUGGET KENTANG</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 10.000,-</li>
              <li class="list-group-item py-0">50 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="sandwich-bayam">
          <div class="card shadow">
            <img src="img/sandwich-bayam.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SANDWICH BAYAM</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 20.000,-</li>
              <li class="list-group-item py-0">30 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="orak-arik-tempe">
          <div class="card shadow">
            <img src="img/orak-arik-tempe-sambel-hijau.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">ORAK ARIK TEMPE</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 10.000,-</li>
              <li class="list-group-item py-0">20 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="sop-bayam-tofu">
          <div class="card shadow">
            <img src="img/sop-bayam-tofu.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SOP BAYAM TOFUUU</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 15.000,-</li>
              <li class="list-group-item py-0">16 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="tempe-geprek">
          <div class="card shadow">
            <img src="img/tempe-geprek.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">TEMPE GEPREK JAHANNAM</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 10.000,-</li>
              <li class="list-group-item py-0">75 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian kentang" id="sambal-balado-kentang">
          <div class="card shadow">
            <img src="img/sambal-balado-kentang.png" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SAMBAL BALADO KENTANG</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 15.000,-</li>
              <li class="list-group-item py-0">45 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="kripik-bayam">
          <div class="card shadow">
            <img src="img/kripik-bayam.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">KRIPIK BAYAM RENYAHHH</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 8.000,-</li>
              <li class="list-group-item py-0">35 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="tempe-sambal-balado">
          <div class="card shadow">
            <img src="img/tempe-sambel-balado-telur-puyuh.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">TEMPE SAMBAL BALADO</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 16.000,-</li>
              <li class="list-group-item py-0">50 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian kentang" id="sambal-balado-kentang-pete">
          <div class="card shadow">
            <img src="img/sambal-balado-kentang-pete.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">SAMBAL BALADO KENTANG PETE</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 12.000,-</li>
              <li class="list-group-item py-0">30 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegan bayam" id="biskuit-bayam">
          <div class="card shadow">
            <img src="img/biskuit-bayam.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">BISKUIT BAYAM HAVERMUT</h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 18.000,-</li>
              <li class="list-group-item py-0">12 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 py-3 vegetarian tempe" id="nugget-tempe-stik">
          <div class="card shadow">
            <img src="img/nugget-tempe-stik.jpg" class="card-img-top" alt="...">
            <div class="card-body pt-1 pb-0 mb-0">
              <h5 class="card-title fs-6">NUGGET TEMPE STIK<span class="text-decoration-line-through">I MALANG</span>
              </h5>
            </div>
            <ul class="list-group list-group-flush fs-6 fw-light">
              <li class="list-group-item py-0">RP. 12.000,-</li>
              <li class="list-group-item py-0">30 orang memilih menu ini</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Daftar Makanan -->

  <!-- Pilih -->
  <section class="pilih my-5" id="pilih">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <h5 class="card-header">Rencanaku</h5>
            <div class="card-body">
              <form method="post">
                <div class="form-floating">
                  <select class="form-select form-select-sm" id="pilih1" aria-label="Floating label select example">
                    <option selected>Pilih disini</option>
                    <option value="1">KRIPIK TEMPE GURIH</option>
                    <option value="2">SOP BAYAM SEGAR</option>
                    <option value="3">MASHED POTATOES</option>
                    <option value="4">SAMBEL TEMPE KEMANGGI</option>
                    <option value="5">SOP BAYAM BENING</option>
                    <option value="6">SAYUR BAYAM JAGUNG</option>
                    <option value="7">TEMPE KUKUS NIKMAT</option>
                    <option value="8">KENTANG GORENG</option>
                    <option value="9">TEMPE SAMBEL PENYET</option>
                    <option value="10">BAYAM SAUS KECAP</option>
                    <option value="11">SAMBEL TEMPE PEDAS</option>
                    <option value="12">NUGGET KENTANG</option>
                    <option value="13">SANDWICH BAYAM</option>
                    <option value="14">ORAK ARIK TEMPE</option>
                    <option value="15">SOP BAYAM TOFUUU</option>
                    <option value="16">TEMPE GEPREK JAHANNAM</option>
                    <option value="17">SAMBAL BALADO KENTANG</option>
                    <option value="18">KRIPIK BAYAM RENYAHHH</option>
                    <option value="19">TEMPE SAMBAL BALADO</option>
                    <option value="20">SAMBAL BALADO KENTANG PETE</option>
                    <option value="21">BISKUIT BAYAM HAVERMUT</option>
                    <option value="22">NUGGET TEMPE STIK</option>
                  </select>
                  <label for="floatingSelect">Menu pertama</label>
                </div>
                <div class="form-floating">
                  <select class="form-select form-select-sm" id="pilih2" aria-label="Floating label select example">
                    <option selected>Pilih disini</option>
                    <option value="1">KRIPIK TEMPE GURIH</option>
                    <option value="2">SOP BAYAM SEGAR</option>
                    <option value="3">MASHED POTATOES</option>
                    <option value="4">SAMBEL TEMPE KEMANGGI</option>
                    <option value="5">SOP BAYAM BENING</option>
                    <option value="6">SAYUR BAYAM JAGUNG</option>
                    <option value="7">TEMPE KUKUS NIKMAT</option>
                    <option value="8">KENTANG GORENG</option>
                    <option value="9">TEMPE SAMBEL PENYET</option>
                    <option value="10">BAYAM SAUS KECAP</option>
                    <option value="11">SAMBEL TEMPE PEDAS</option>
                    <option value="12">NUGGET KENTANG</option>
                    <option value="13">SANDWICH BAYAM</option>
                    <option value="14">ORAK ARIK TEMPE</option>
                    <option value="15">SOP BAYAM TOFUUU</option>
                    <option value="16">TEMPE GEPREK JAHANNAM</option>
                    <option value="17">SAMBAL BALADO KENTANG</option>
                    <option value="18">KRIPIK BAYAM RENYAHHH</option>
                    <option value="19">TEMPE SAMBAL BALADO</option>
                    <option value="20">SAMBAL BALADO KENTANG PETE</option>
                    <option value="21">BISKUIT BAYAM HAVERMUT</option>
                    <option value="22">NUGGET TEMPE STIK</option>
                  </select>
                  <label for="floatingSelect">Menu kedua</label>
                </div>
                <div class="form-floating">
                  <select class="form-select form-select-sm" id="pilih3" aria-label="Floating label select example">
                    <option selected>Pilih disini</option>
                    <option value="1">KRIPIK TEMPE GURIH</option>
                    <option value="2">SOP BAYAM SEGAR</option>
                    <option value="3">MASHED POTATOES</option>
                    <option value="4">SAMBEL TEMPE KEMANGGI</option>
                    <option value="5">SOP BAYAM BENING</option>
                    <option value="6">SAYUR BAYAM JAGUNG</option>
                    <option value="7">TEMPE KUKUS NIKMAT</option>
                    <option value="8">KENTANG GORENG</option>
                    <option value="9">TEMPE SAMBEL PENYET</option>
                    <option value="10">BAYAM SAUS KECAP</option>
                    <option value="11">SAMBEL TEMPE PEDAS</option>
                    <option value="12">NUGGET KENTANG</option>
                    <option value="13">SANDWICH BAYAM</option>
                    <option value="14">ORAK ARIK TEMPE</option>
                    <option value="15">SOP BAYAM TOFUUU</option>
                    <option value="16">TEMPE GEPREK JAHANNAM</option>
                    <option value="17">SAMBAL BALADO KENTANG</option>
                    <option value="18">KRIPIK BAYAM RENYAHHH</option>
                    <option value="19">TEMPE SAMBAL BALADO</option>
                    <option value="20">SAMBAL BALADO KENTANG PETE</option>
                    <option value="21">BISKUIT BAYAM HAVERMUT</option>
                    <option value="22">NUGGET TEMPE STIK</option>
                  </select>
                  <label for="floatingSelect">Menu ketiga</label>
                </div>
                <div class="form-floating">
                  <select class="form-select form-select-sm" id="pilih4" aria-label="Floating label select example">
                    <option selected>Pilih disini</option>
                    <option value="1">KRIPIK TEMPE GURIH</option>
                    <option value="2">SOP BAYAM SEGAR</option>
                    <option value="3">MASHED POTATOES</option>
                    <option value="4">SAMBEL TEMPE KEMANGGI</option>
                    <option value="5">SOP BAYAM BENING</option>
                    <option value="6">SAYUR BAYAM JAGUNG</option>
                    <option value="7">TEMPE KUKUS NIKMAT</option>
                    <option value="8">KENTANG GORENG</option>
                    <option value="9">TEMPE SAMBEL PENYET</option>
                    <option value="10">BAYAM SAUS KECAP</option>
                    <option value="11">SAMBEL TEMPE PEDAS</option>
                    <option value="12">NUGGET KENTANG</option>
                    <option value="13">SANDWICH BAYAM</option>
                    <option value="14">ORAK ARIK TEMPE</option>
                    <option value="15">SOP BAYAM TOFUUU</option>
                    <option value="16">TEMPE GEPREK JAHANNAM</option>
                    <option value="17">SAMBAL BALADO KENTANG</option>
                    <option value="18">KRIPIK BAYAM RENYAHHH</option>
                    <option value="19">TEMPE SAMBAL BALADO</option>
                    <option value="20">SAMBAL BALADO KENTANG PETE</option>
                    <option value="21">BISKUIT BAYAM HAVERMUT</option>
                    <option value="22">NUGGET TEMPE STIK</option>
                  </select>
                  <label for="floatingSelect">Menu keempat</label>
                </div>
                <div class="form-floating">
                  <select class="form-select form-select-sm" id="pilih5" aria-label="Floating label select example">
                    <option selected>Pilih disini</option>
                    <option value="1">KRIPIK TEMPE GURIH</option>
                    <option value="2">SOP BAYAM SEGAR</option>
                    <option value="3">MASHED POTATOES</option>
                    <option value="4">SAMBEL TEMPE KEMANGGI</option>
                    <option value="5">SOP BAYAM BENING</option>
                    <option value="6">SAYUR BAYAM JAGUNG</option>
                    <option value="7">TEMPE KUKUS NIKMAT</option>
                    <option value="8">KENTANG GORENG</option>
                    <option value="9">TEMPE SAMBEL PENYET</option>
                    <option value="10">BAYAM SAUS KECAP</option>
                    <option value="11">SAMBEL TEMPE PEDAS</option>
                    <option value="12">NUGGET KENTANG</option>
                    <option value="13">SANDWICH BAYAM</option>
                    <option value="14">ORAK ARIK TEMPE</option>
                    <option value="15">SOP BAYAM TOFUUU</option>
                    <option value="16">TEMPE GEPREK JAHANNAM</option>
                    <option value="17">SAMBAL BALADO KENTANG</option>
                    <option value="18">KRIPIK BAYAM RENYAHHH</option>
                    <option value="19">TEMPE SAMBAL BALADO</option>
                    <option value="20">SAMBAL BALADO KENTANG PETE</option>
                    <option value="21">BISKUIT BAYAM HAVERMUT</option>
                    <option value="22">NUGGET TEMPE STIK</option>
                  </select>
                  <label for="floatingSelect">Menu kelima</label>
                </div>
                <div class="form-floating">
                  <select class="form-select form-select-sm" id="pilih6" aria-label="Floating label select example">
                    <option selected>Pilih disini</option>
                    <option value="1">KRIPIK TEMPE GURIH</option>
                    <option value="2">SOP BAYAM SEGAR</option>
                    <option value="3">MASHED POTATOES</option>
                    <option value="4">SAMBEL TEMPE KEMANGGI</option>
                    <option value="5">SOP BAYAM BENING</option>
                    <option value="6">SAYUR BAYAM JAGUNG</option>
                    <option value="7">TEMPE KUKUS NIKMAT</option>
                    <option value="8">KENTANG GORENG</option>
                    <option value="9">TEMPE SAMBEL PENYET</option>
                    <option value="10">BAYAM SAUS KECAP</option>
                    <option value="11">SAMBEL TEMPE PEDAS</option>
                    <option value="12">NUGGET KENTANG</option>
                    <option value="13">SANDWICH BAYAM</option>
                    <option value="14">ORAK ARIK TEMPE</option>
                    <option value="15">SOP BAYAM TOFUUU</option>
                    <option value="16">TEMPE GEPREK JAHANNAM</option>
                    <option value="17">SAMBAL BALADO KENTANG</option>
                    <option value="18">KRIPIK BAYAM RENYAHHH</option>
                    <option value="19">TEMPE SAMBAL BALADO</option>
                    <option value="20">SAMBAL BALADO KENTANG PETE</option>
                    <option value="21">BISKUIT BAYAM HAVERMUT</option>
                    <option value="22">NUGGET TEMPE STIK</option>
                  </select>
                  <label for="floatingSelect">Menu keenam</label>
                </div>
                <div class="form-floating">
                  <select class="form-select form-select-sm" id="pilih7" aria-label="Floating label select example">
                    <option selected>Pilih disini</option>
                    <option value="1">KRIPIK TEMPE GURIH</option>
                    <option value="2">SOP BAYAM SEGAR</option>
                    <option value="3">MASHED POTATOES</option>
                    <option value="4">SAMBEL TEMPE KEMANGGI</option>
                    <option value="5">SOP BAYAM BENING</option>
                    <option value="6">SAYUR BAYAM JAGUNG</option>
                    <option value="7">TEMPE KUKUS NIKMAT</option>
                    <option value="8">KENTANG GORENG</option>
                    <option value="9">TEMPE SAMBEL PENYET</option>
                    <option value="10">BAYAM SAUS KECAP</option>
                    <option value="11">SAMBEL TEMPE PEDAS</option>
                    <option value="12">NUGGET KENTANG</option>
                    <option value="13">SANDWICH BAYAM</option>
                    <option value="14">ORAK ARIK TEMPE</option>
                    <option value="15">SOP BAYAM TOFUUU</option>
                    <option value="16">TEMPE GEPREK JAHANNAM</option>
                    <option value="17">SAMBAL BALADO KENTANG</option>
                    <option value="18">KRIPIK BAYAM RENYAHHH</option>
                    <option value="19">TEMPE SAMBAL BALADO</option>
                    <option value="20">SAMBAL BALADO KENTANG PETE</option>
                    <option value="21">BISKUIT BAYAM HAVERMUT</option>
                    <option value="22">NUGGET TEMPE STIK</option>
                  </select>
                  <label for="floatingSelect">Menu ketujuh</label>
                </div>
                <div class="btncontrol text-center">
                  <button class="btn btn-primary selesai px-4 mt-3" type="button" onclick="pilih()">Selesai</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Pilih -->

  <!-- Card Buat-->
  <section class="card-buat my-5" id="buat">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg">
          <div class="card">
            <h5 class="card-header">Rencanaku</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2 py-3 vegetarian tempe" id="buatkripik-tempe">
                  <div class="card shadow">
                    <img src="img/kripik_tempe.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KRIPIK TEMPE GURIH</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatsop-bayam">
                  <div class="card shadow">
                    <img src="img/sop-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM SEGAR</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">68 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="buatmashed-potatoes">
                  <div class="card shadow">
                    <img src="img/mashed-potatoes.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">MASHED POTATOES</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 6.000,-</li>
                      <li class="list-group-item py-0">25 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buatsambel-tempe-kemanggi">
                  <div class="card shadow">
                    <img src="img/sambel-tempe-kemanggi.jpeg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBEL TEMPE KEMANGGI</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatsop-bayam-bening">
                  <div class="card shadow">
                    <img src="img/sop-bayam-bening.jpeg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM BENING</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">10 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatsayur-bayam-jagung-kuah-santan">
                  <div class="card shadow">
                    <img src="img/sayur-bayam-jagung-kuah-santan.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAYUR BAYAM JAGUNG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 14.000,-</li>
                      <li class="list-group-item py-0">12 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buattempe-kukus">
                  <div class="card shadow">
                    <img src="img/tempe-kukus.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE KUKUS NIKMAT</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="buatkentang-goreng">
                  <div class="card shadow">
                    <img src="img/kentang-goreng.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KENTANG GORENG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">75 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buattempe-sambel-penyet">
                  <div class="card shadow">
                    <img src="img/tempe-sambel-penyet.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE SAMBEL PENYET</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatbayam-saus-kecap">
                  <div class="card shadow">
                    <img src="img/bayam-saus-kecap.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">BAYAM SAUS KECAP</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 5.000,-</li>
                      <li class="list-group-item py-0">45 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buatsambel-tempe-pedas">
                  <div class="card shadow">
                    <img src="img/sambal-tempe-pedas.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBEL TEMPE PEDAS</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="buatnugget-kentang">
                  <div class="card shadow">
                    <img src="img/kentang-goreng-nugget-kentang.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">NUGGET KENTANG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatsandwich-bayam">
                  <div class="card shadow">
                    <img src="img/sandwich-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SANDWICH BAYAM</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 20.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buatorak-arik-tempe">
                  <div class="card shadow">
                    <img src="img/orak-arik-tempe-sambel-hijau.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">ORAK ARIK TEMPE</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatsop-bayam-tofu">
                  <div class="card shadow">
                    <img src="img/sop-bayam-tofu.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM TOFUUU</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">16 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buattempe-geprek">
                  <div class="card shadow">
                    <img src="img/tempe-geprek.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE GEPREK JAHANNAM</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">75 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="buatsambal-balado-kentang">
                  <div class="card shadow">
                    <img src="img/sambal-balado-kentang.png" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBAL BALADO KENTANG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">45 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatkripik-bayam">
                  <div class="card shadow">
                    <img src="img/kripik-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KRIPIK BAYAM RENYAHHH</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buattempe-sambal-balado">
                  <div class="card shadow">
                    <img src="img/tempe-sambel-balado-telur-puyuh.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE SAMBAL BALADO</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 16.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="buatsambal-balado-kentang-pete">
                  <div class="card shadow">
                    <img src="img/sambal-balado-kentang-pete.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBAL BALADO KENTANG PETE</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="buatbiskuit-bayam">
                  <div class="card shadow">
                    <img src="img/biskuit-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">BISKUIT BAYAM HAVERMUT</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 18.000,-</li>
                      <li class="list-group-item py-0">12 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="buatnugget-tempe-stik">
                  <div class="card shadow">
                    <img src="img/nugget-tempe-stik.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">NUGGET TEMPE STIK<span class="text-decoration-line-through">I
                          MALANG</span>
                      </h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 align-self-center btncontrol text-center offset-md-7">
                  <a href="rencanaku.php" class="btn btn-outline-secondary ubah">Ubah</a>
                  <button class="btn btn-primary buat ms-2" onclick="buat()">Buat</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="card-buat my-5" id="simpan">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg">
          <div class="card">
            <h5 class="card-header">Rencanaku</h5>
            <div class="card-body">
              <p class="card-title fs-6"> <?php echo date("d-m-Y"); ?> -
                <?php $d=strtotime("+7 Days");echo date("d-m-Y", $d); ?> </p>
              <div class="row">
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpankripik-tempe">
                  <div class="card shadow">
                    <img src="img/kripik_tempe.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KRIPIK TEMPE GURIH</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpansop-bayam">
                  <div class="card shadow">
                    <img src="img/sop-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM SEGAR</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">68 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="simpanmashed-potatoes">
                  <div class="card shadow">
                    <img src="img/mashed-potatoes.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">MASHED POTATOES</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 6.000,-</li>
                      <li class="list-group-item py-0">25 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpansambel-tempe-kemanggi">
                  <div class="card shadow">
                    <img src="img/sambel-tempe-kemanggi.jpeg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBEL TEMPE KEMANGGI</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpansop-bayam-bening">
                  <div class="card shadow">
                    <img src="img/sop-bayam-bening.jpeg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM BENING</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">10 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpansayur-bayam-jagung-kuah-santan">
                  <div class="card shadow">
                    <img src="img/sayur-bayam-jagung-kuah-santan.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAYUR BAYAM JAGUNG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 14.000,-</li>
                      <li class="list-group-item py-0">12 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpantempe-kukus">
                  <div class="card shadow">
                    <img src="img/tempe-kukus.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE KUKUS NIKMAT</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="simpankentang-goreng">
                  <div class="card shadow">
                    <img src="img/kentang-goreng.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KENTANG GORENG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">75 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpantempe-sambel-penyet">
                  <div class="card shadow">
                    <img src="img/tempe-sambel-penyet.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE SAMBEL PENYET</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpanbayam-saus-kecap">
                  <div class="card shadow">
                    <img src="img/bayam-saus-kecap.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">BAYAM SAUS KECAP</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 5.000,-</li>
                      <li class="list-group-item py-0">45 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpansambel-tempe-pedas">
                  <div class="card shadow">
                    <img src="img/sambal-tempe-pedas.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBEL TEMPE PEDAS</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="simpannugget-kentang">
                  <div class="card shadow">
                    <img src="img/kentang-goreng-nugget-kentang.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">NUGGET KENTANG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpansandwich-bayam">
                  <div class="card shadow">
                    <img src="img/sandwich-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SANDWICH BAYAM</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 20.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpanorak-arik-tempe">
                  <div class="card shadow">
                    <img src="img/orak-arik-tempe-sambel-hijau.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">ORAK ARIK TEMPE</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpansop-bayam-tofu">
                  <div class="card shadow">
                    <img src="img/sop-bayam-tofu.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM TOFUUU</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">16 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpantempe-geprek">
                  <div class="card shadow">
                    <img src="img/tempe-geprek.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE GEPREK JAHANNAM</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">75 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="simpansambal-balado-kentang">
                  <div class="card shadow">
                    <img src="img/sambal-balado-kentang.png" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBAL BALADO KENTANG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">45 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpankripik-bayam">
                  <div class="card shadow">
                    <img src="img/kripik-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KRIPIK BAYAM RENYAHHH</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpantempe-sambal-balado">
                  <div class="card shadow">
                    <img src="img/tempe-sambel-balado-telur-puyuh.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE SAMBAL BALADO</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 16.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="simpansambal-balado-kentang-pete">
                  <div class="card shadow">
                    <img src="img/sambal-balado-kentang-pete.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBAL BALADO KENTANG PETE</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="simpanbiskuit-bayam">
                  <div class="card shadow">
                    <img src="img/biskuit-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">BISKUIT BAYAM HAVERMUT</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 18.000,-</li>
                      <li class="list-group-item py-0">12 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="simpannugget-tempe-stik">
                  <div class="card shadow">
                    <img src="img/nugget-tempe-stik.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">NUGGET TEMPE STIK<span class="text-decoration-line-through">I
                          MALANG</span>
                      </h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 align-self-center btncontrol text-center offset-md-7">
                  <button class="btn btn-primary buat ms-2" onclick="simpan()">Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="card-buat my-5" id="profil">
    <div class="container text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
        class="bi bi-person-circle icon-blue" id="usericon" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd"
          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
      </svg>
      <p class="lead">MUZAKKY</p>
      <p class="lead">zakky092@gmail.com</p>
      <div class="row justify-content-center">
        <div class="col-lg">
          <div class="card">
            <h5 class="card-header">Rencanaku</h5>
            <div class="card-body">
              <p class="card-title fs-6"> <?php echo date("d-m-Y"); ?> -
                <?php $d=strtotime("+7 Days");echo date("d-m-Y", $d); ?> </p>
              <div class="row">
                <div class="col-lg-2 py-3 vegetarian tempe" id="profilkripik-tempe">
                  <div class="card shadow">
                    <img src="img/kripik_tempe.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KRIPIK TEMPE GURIH</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilsop-bayam">
                  <div class="card shadow">
                    <img src="img/sop-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM SEGAR</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">68 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="profilmashed-potatoes">
                  <div class="card shadow">
                    <img src="img/mashed-potatoes.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">MASHED POTATOES</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 6.000,-</li>
                      <li class="list-group-item py-0">25 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profilsambel-tempe-kemanggi">
                  <div class="card shadow">
                    <img src="img/sambel-tempe-kemanggi.jpeg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBEL TEMPE KEMANGGI</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilsop-bayam-bening">
                  <div class="card shadow">
                    <img src="img/sop-bayam-bening.jpeg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM BENING</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">10 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilsayur-bayam-jagung-kuah-santan">
                  <div class="card shadow">
                    <img src="img/sayur-bayam-jagung-kuah-santan.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAYUR BAYAM JAGUNG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 14.000,-</li>
                      <li class="list-group-item py-0">12 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profiltempe-kukus">
                  <div class="card shadow">
                    <img src="img/tempe-kukus.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE KUKUS NIKMAT</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="profilkentang-goreng">
                  <div class="card shadow">
                    <img src="img/kentang-goreng.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KENTANG GORENG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">75 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profiltempe-sambel-penyet">
                  <div class="card shadow">
                    <img src="img/tempe-sambel-penyet.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE SAMBEL PENYET</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilbayam-saus-kecap">
                  <div class="card shadow">
                    <img src="img/bayam-saus-kecap.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">BAYAM SAUS KECAP</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 5.000,-</li>
                      <li class="list-group-item py-0">45 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profilsambel-tempe-pedas">
                  <div class="card shadow">
                    <img src="img/sambal-tempe-pedas.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBEL TEMPE PEDAS</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="profilnugget-kentang">
                  <div class="card shadow">
                    <img src="img/kentang-goreng-nugget-kentang.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">NUGGET KENTANG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilsandwich-bayam">
                  <div class="card shadow">
                    <img src="img/sandwich-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SANDWICH BAYAM</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 20.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profilorak-arik-tempe">
                  <div class="card shadow">
                    <img src="img/orak-arik-tempe-sambel-hijau.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">ORAK ARIK TEMPE</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">20 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilsop-bayam-tofu">
                  <div class="card shadow">
                    <img src="img/sop-bayam-tofu.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SOP BAYAM TOFUUU</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">16 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profiltempe-geprek">
                  <div class="card shadow">
                    <img src="img/tempe-geprek.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE GEPREK JAHANNAM</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 10.000,-</li>
                      <li class="list-group-item py-0">75 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="profilsambal-balado-kentang">
                  <div class="card shadow">
                    <img src="img/sambal-balado-kentang.png" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBAL BALADO KENTANG</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 15.000,-</li>
                      <li class="list-group-item py-0">45 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilkripik-bayam">
                  <div class="card shadow">
                    <img src="img/kripik-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">KRIPIK BAYAM RENYAHHH</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 8.000,-</li>
                      <li class="list-group-item py-0">35 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profiltempe-sambal-balado">
                  <div class="card shadow">
                    <img src="img/tempe-sambel-balado-telur-puyuh.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">TEMPE SAMBAL BALADO</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 16.000,-</li>
                      <li class="list-group-item py-0">50 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian kentang" id="profilsambal-balado-kentang-pete">
                  <div class="card shadow">
                    <img src="img/sambal-balado-kentang-pete.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">SAMBAL BALADO KENTANG PETE</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegan bayam" id="profilbiskuit-bayam">
                  <div class="card shadow">
                    <img src="img/biskuit-bayam.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">BISKUIT BAYAM HAVERMUT</h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 18.000,-</li>
                      <li class="list-group-item py-0">12 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-2 py-3 vegetarian tempe" id="profilnugget-tempe-stik">
                  <div class="card shadow">
                    <img src="img/nugget-tempe-stik.jpg" class="card-img-top" alt="...">
                    <div class="card-body pt-1 pb-0 mb-0">
                      <h5 class="card-title fs-6">NUGGET TEMPE STIK<span class="text-decoration-line-through">I
                          MALANG</span>
                      </h5>
                    </div>
                    <ul class="list-group list-group-flush fs-6 fw-light">
                      <li class="list-group-item py-0">RP. 12.000,-</li>
                      <li class="list-group-item py-0">30 orang memilih menu ini</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 align-self-center btncontrol text-center offset-md-7">
                  <button class="btn btn-primary buat ms-2" onclick="hapus()">Hapus</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="card-buat my-5" id="profil-hapus">
    <div class="container text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
        class="bi bi-person-circle icon-blue" id="usericon" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd"
          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
      </svg>
      <p class="lead">MUZAKKY</p>
      <p class="lead">zakky092@gmail.com</p>
      <div class="row justify-content-center">
        <div class="col-lg">
          <div class="card">
            <h5 class="card-header">Rencanaku</h5>
            <div class="card-body">
              <p class="card-title fs-6"> <?php echo date("d-m-Y"); ?> -
                <?php $d=strtotime("+7 Days");echo date("d-m-Y", $d); ?> </p>
              <div class="row">
                <p class="le">Belum Ada Rencana</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Card Buat -->

  <!-- Footer -->
  <section class="footer pt-5">
    <div class="container text-center">
      <hr class="mb-3">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
      <p class="lead fs-6">2020. Oleh Mochammad Fachrizal Muzakky</p>
    </div>
  </section>
  <!-- Akhir Footer -->

  <!-- Bootstrap JS -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>

  <!-- My JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Enable Button -->
  <script type="text/JavaScript">
    var courses = ['1', '2'];
    
    $('#harga' && '#bahan' && '#kebutuhan' && '#alergi').one('change', function () {
      $('#btncari').prop('disabled', false);
    });
  </script>
  <!-- Akhir Enable Button -->

  <!-- Filter Pencarian -->
  <script type="text/JavaScript">
    function cari() {
      document.getElementById("pilih").style.display = "block";
      document.getElementById("track1").style.display = "none";
      document.getElementById("track2").style.display = "block";
      var bahan = document.getElementById("bahanId");
      var bahanV = bahan.value;
      var kebutuhan = document.getElementById("kebutuhan");
      var kebutuhanV = kebutuhan.value;
      if (bahanV == "1") {
        document.getElementById("kripik-tempe").style.display = "none";
        document.getElementById("sambel-tempe-kemanggi").style.display = "none";
        document.getElementById("tempe-kukus").style.display = "none";
        document.getElementById("tempe-sambel-penyet").style.display = "none";
        document.getElementById("sambel-tempe-pedas").style.display = "none";
        document.getElementById("orak-arik-tempe").style.display = "none";
        document.getElementById("tempe-geprek").style.display = "none";
        document.getElementById("tempe-sambal-balado").style.display = "none";
        document.getElementById("nugget-tempe-stik").style.display = "none";     
        document.getElementById("sop-bayam").style.display = "none";
        document.getElementById("sop-bayam-bening").style.display = "none";
        document.getElementById("sayur-bayam-jagung-kuah-santan").style.display = "none";
        document.getElementById("bayam-saus-kecap").style.display = "none";
        document.getElementById("sandwich-bayam").style.display = "none";
        document.getElementById("sop-bayam-tofu").style.display = "none";
        document.getElementById("kripik-bayam").style.display = "none";
        document.getElementById("biskuit-bayam").style.display = "none"; 
      } else if (bahanV == "2") {
        document.getElementById("mashed-potatoes").style.display = "none";  
        document.getElementById("kentang-goreng").style.display = "none";
        document.getElementById("nugget-kentang").style.display = "none";  
        document.getElementById("sambal-balado-kentang").style.display = "none";
        document.getElementById("sambal-balado-kentang-pete").style.display = "none"; 
        document.getElementById("sop-bayam").style.display = "none";
        document.getElementById("sop-bayam-bening").style.display = "none";
        document.getElementById("sayur-bayam-jagung-kuah-santan").style.display = "none";
        document.getElementById("bayam-saus-kecap").style.display = "none";
        document.getElementById("sandwich-bayam").style.display = "none";
        document.getElementById("sop-bayam-tofu").style.display = "none";
        document.getElementById("kripik-bayam").style.display = "none";
        document.getElementById("biskuit-bayam").style.display = "none";
      } else if (bahanV == "3") {
        document.getElementById("mashed-potatoes").style.display = "none";  
        document.getElementById("kentang-goreng").style.display = "none";
        document.getElementById("nugget-kentang").style.display = "none";  
        document.getElementById("sambal-balado-kentang").style.display = "none";
        document.getElementById("sambal-balado-kentang-pete").style.display = "none";
        document.getElementById("kripik-tempe").style.display = "none";
        document.getElementById("sambel-tempe-kemanggi").style.display = "none";
        document.getElementById("tempe-kukus").style.display = "none";
        document.getElementById("tempe-sambel-penyet").style.display = "none";
        document.getElementById("sambel-tempe-pedas").style.display = "none";
        document.getElementById("orak-arik-tempe").style.display = "none";
        document.getElementById("tempe-geprek").style.display = "none";
        document.getElementById("tempe-sambal-balado").style.display = "none";
        document.getElementById("nugget-tempe-stik").style.display = "none";  
      }
      if (kebutuhanV == "1") {     
        document.getElementById("sop-bayam").style.display = "none";
        document.getElementById("sop-bayam-bening").style.display = "none";
        document.getElementById("sayur-bayam-jagung-kuah-santan").style.display = "none";
        document.getElementById("bayam-saus-kecap").style.display = "none";
        document.getElementById("sandwich-bayam").style.display = "none";
        document.getElementById("sop-bayam-tofu").style.display = "none";
        document.getElementById("kripik-bayam").style.display = "none";
        document.getElementById("biskuit-bayam").style.display = "none"; 
      } else if (kebutuhanV == "2") {
        document.getElementById("mashed-potatoes").style.display = "none";  
        document.getElementById("kentang-goreng").style.display = "none";
        document.getElementById("nugget-kentang").style.display = "none";  
        document.getElementById("sambal-balado-kentang").style.display = "none";
        document.getElementById("sambal-balado-kentang-pete").style.display = "none"; 
        document.getElementById("kripik-tempe").style.display = "none";
        document.getElementById("sambel-tempe-kemanggi").style.display = "none";
        document.getElementById("tempe-kukus").style.display = "none";
        document.getElementById("tempe-sambel-penyet").style.display = "none";
        document.getElementById("sambel-tempe-pedas").style.display = "none";
        document.getElementById("orak-arik-tempe").style.display = "none";
        document.getElementById("tempe-geprek").style.display = "none";
        document.getElementById("tempe-sambal-balado").style.display = "none";
        document.getElementById("nugget-tempe-stik").style.display = "none";
      }
    }  
  </script>
  <!-- Akhir Filter Pencarian -->

  <!-- Pilih Makanan -->
  <script type="text/JavaScript">
    function pilih() {
      document.getElementById("track1").style.display = "none";
      document.getElementById("track2").style.display = "none";
      document.getElementById("track3").style.display = "block";
      document.getElementById("cari").style.display = "none";
      document.getElementById("daftar-makanan").style.display = "none";
      document.getElementById("pilih").style.display = "none";
      document.getElementById("buat").style.display = "block";
      var pilihan1, pilihan2, pilihan3, pilihan4, pilihan5, pilihan6, pilihan7;
      var pilih1 = document.getElementById("pilih1");
      var pilih1V = pilih1.value;
      if (pilih1V == "1") {
        pilihan1 = "kripik-tempe";
        document.getElementById("buatkripik-tempe").style.display = "block";
      } else if (pilih1V == "2") {
        pilihan1 = "sop-bayam";
        document.getElementById("buatsop-bayam").style.display = "block";
      } else if (pilih1V == "3") { 
        pilihan1 = "mashed-potatoes";
        document.getElementById("buatmashed-potatoes").style.display = "block";
      } else if (pilih1V == "4") {
        pilihan1 = "sambel-tempe-kemanggi";
        document.getElementById("buatsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih1V == "5") { 
        pilihan1 = "sop-bayam-bening";
        document.getElementById("buatsop-bayam-bening").style.display = "block";
      } else if (pilih1V == "6") {
        pilihan1 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("buatsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih1V == "7") {
        pilihan1 = "tempe-kukus"; 
        document.getElementById("buattempe-kukus").style.display = "block";
      } else if (pilih1V == "8") {
        pilihan1 = "kentang-goreng";
        document.getElementById("buatkentang-goreng").style.display = "block";
      } else if (pilih1V == "9") { 
        pilihan1 = "tempe-sambel-penyet";
        document.getElementById("buattempe-sambel-penyet").style.display = "block";
      } else if (pilih1V == "10") {
        pilihan1 = "bayam-saus-kecap";
        document.getElementById("buatbayam-saus-kecap").style.display = "block";
      } else if (pilih1V == "11") { 
        pilihan1 = "sambel-tempe-pedas";
        document.getElementById("buatsambel-tempe-pedas").style.display = "block";
      } else if (pilih1V == "12") {
        pilihan1 = "nugget-kentang";
        document.getElementById("buatnugget-kentang").style.display = "block";
      } else if (pilih1V == "13") { 
        pilihan1 = "sandwich-bayam";
        document.getElementById("buatsandwich-bayam").style.display = "none";
      } else if (pilih1V == "14") {
        pilihan1 = "orak-arik-tempe";
        document.getElementById("buatorak-arik-tempe").style.display = "block";
      } else if (pilih1V == "15") { 
        pilihan1 = "sop-bayam-tofu";
        document.getElementById("buatsop-bayam-tofu").style.display = "block";
      } else if (pilih1V == "16") {
        pilihan1 = "tempe-geprek";
        document.getElementById("buattempe-geprek").style.display = "block";
      } else if (pilih1V == "17") { 
        pilihan1 = "sambal-balado-kentang";
        document.getElementById("buatsambal-balado-kentang").style.display = "block";
      } else if (pilih1V == "18") { 
        pilihan1 = "kripik-bayam";
        document.getElementById("buatkripik-bayam").style.display = "block";
      } else if (pilih1V == "19") {
        pilihan1 = "tempe-sambal-balado";
        document.getElementById("buattempe-sambal-balado").style.display = "block";
      } else if (pilih1V == "20") { 
        pilihan1 = "sambal-balado-kentang-pete";
        document.getElementById("buatsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih1V == "21") {
        pilihan1 = "biskuit-bayam";
        document.getElementById("buatbiskuit-bayam").style.display = "block";
      } else if (pilih1V == "22") { 
        pilihan1 = "nugget-tempe-stik";
        document.getElementById("buatnugget-tempe-stik").style.display = "block";
      }
      var pilih2 = document.getElementById("pilih2");
      var pilih2V = pilih2.value;
      if (pilih2V == "1") {
        pilihan2 = "kripik-tempe";
        document.getElementById("buatkripik-tempe").style.display = "block";
      } else if (pilih2V == "2") {
        pilihan2 = "sop-bayam";
        document.getElementById("buatsop-bayam").style.display = "block";
      } else if (pilih2V == "3") { 
        pilihan2 = "mashed-potatoes";
        document.getElementById("buatmashed-potatoes").style.display = "block";
      } else if (pilih2V == "4") {
        pilihan2 = "sambel-tempe-kemanggi";
        document.getElementById("buatsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih2V == "5") { 
        pilihan2 = "sop-bayam-bening";
        document.getElementById("buatsop-bayam-bening").style.display = "block";
      } else if (pilih2V == "6") {
        pilihan2 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("buatsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih2V == "7") {
        pilihan2 = "tempe-kukus"; 
        document.getElementById("buattempe-kukus").style.display = "block";
      } else if (pilih2V == "8") {
        pilihan2 = "kentang-goreng";
        document.getElementById("buatkentang-goreng").style.display = "block";
      } else if (pilih2V == "9") { 
        pilihan2 = "tempe-sambel-penyet";
        document.getElementById("buattempe-sambel-penyet").style.display = "block";
      } else if (pilih2V == "10") {
        pilihan2 = "bayam-saus-kecap";
        document.getElementById("buatbayam-saus-kecap").style.display = "block";
      } else if (pilih2V == "11") { 
        pilihan2 = "sambel-tempe-pedas";
        document.getElementById("buatsambel-tempe-pedas").style.display = "block";
      } else if (pilih2V == "12") {
        pilihan2 = "nugget-kentang";
        document.getElementById("buatnugget-kentang").style.display = "block";
      } else if (pilih2V == "13") { 
        pilihan2 = "sandwich-bayam";
        document.getElementById("buatsandwich-bayam").style.display = "none";
      } else if (pilih2V == "14") {
        pilihan2 = "orak-arik-tempe";
        document.getElementById("buatorak-arik-tempe").style.display = "block";
      } else if (pilih2V == "15") { 
        pilihan2 = "sop-bayam-tofu";
        document.getElementById("buatsop-bayam-tofu").style.display = "block";
      } else if (pilih2V == "16") {
        pilihan2 = "tempe-geprek";
        document.getElementById("buattempe-geprek").style.display = "block";
      } else if (pilih2V == "17") { 
        pilihan2 = "sambal-balado-kentang";
        document.getElementById("buatsambal-balado-kentang").style.display = "block";
      } else if (pilih2V == "18") { 
        pilihan2 = "kripik-bayam";
        document.getElementById("buatkripik-bayam").style.display = "block";
      } else if (pilih2V == "19") {
        pilihan2 = "tempe-sambal-balado";
        document.getElementById("buattempe-sambal-balado").style.display = "block";
      } else if (pilih2V == "20") { 
        pilihan2 = "sambal-balado-kentang-pete";
        document.getElementById("buatsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih2V == "21") {
        pilihan2 = "biskuit-bayam";
        document.getElementById("buatbiskuit-bayam").style.display = "block";
      } else if (pilih2V == "22") { 
        pilihan2 = "nugget-tempe-stik";
        document.getElementById("buatnugget-tempe-stik").style.display = "block";
      }
      var pilih3 = document.getElementById("pilih3");
      var pilih3V = pilih3.value;
      if (pilih3V == "1") {
        pilihan3 = "kripik-tempe";
        document.getElementById("buatkripik-tempe").style.display = "block";
      } else if (pilih3V == "2") {
        pilihan3 = "sop-bayam";
        document.getElementById("buatsop-bayam").style.display = "block";
      } else if (pilih3V == "3") { 
        pilihan3 = "mashed-potatoes";
        document.getElementById("buatmashed-potatoes").style.display = "block";
      } else if (pilih3V == "4") {
        pilihan3 = "sambel-tempe-kemanggi";
        document.getElementById("buatsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih3V == "5") { 
        pilihan3 = "sop-bayam-bening";
        document.getElementById("buatsop-bayam-bening").style.display = "block";
      } else if (pilih3V == "6") {
        pilihan3 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("buatsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih3V == "7") {
        pilihan3 = "tempe-kukus"; 
        document.getElementById("buattempe-kukus").style.display = "block";
      } else if (pilih3V == "8") {
        pilihan3 = "kentang-goreng";
        document.getElementById("buatkentang-goreng").style.display = "block";
      } else if (pilih3V == "9") { 
        pilihan3 = "tempe-sambel-penyet";
        document.getElementById("buattempe-sambel-penyet").style.display = "block";
      } else if (pilih3V == "10") {
        pilihan3 = "bayam-saus-kecap";
        document.getElementById("buatbayam-saus-kecap").style.display = "block";
      } else if (pilih3V == "11") { 
        pilihan3 = "sambel-tempe-pedas";
        document.getElementById("buatsambel-tempe-pedas").style.display = "block";
      } else if (pilih3V == "12") {
        pilihan3 = "nugget-kentang";
        document.getElementById("buatnugget-kentang").style.display = "block";
      } else if (pilih3V == "13") { 
        pilihan3 = "sandwich-bayam";
        document.getElementById("buatsandwich-bayam").style.display = "none";
      } else if (pilih3V == "14") {
        pilihan3 = "orak-arik-tempe";
        document.getElementById("buatorak-arik-tempe").style.display = "block";
      } else if (pilih3V == "15") { 
        pilihan3 = "sop-bayam-tofu";
        document.getElementById("buatsop-bayam-tofu").style.display = "block";
      } else if (pilih3V == "16") {
        pilihan3 = "tempe-geprek";
        document.getElementById("buattempe-geprek").style.display = "block";
      } else if (pilih3V == "17") { 
        pilihan3 = "sambal-balado-kentang";
        document.getElementById("buatsambal-balado-kentang").style.display = "block";
      } else if (pilih3V == "18") { 
        pilihan3 = "kripik-bayam";
        document.getElementById("buatkripik-bayam").style.display = "block";
      } else if (pilih3V == "19") {
        pilihan3 = "tempe-sambal-balado";
        document.getElementById("buattempe-sambal-balado").style.display = "block";
      } else if (pilih3V == "20") { 
        pilihan3 = "sambal-balado-kentang-pete";
        document.getElementById("buatsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih3V == "21") {
        pilihan3 = "biskuit-bayam";
        document.getElementById("buatbiskuit-bayam").style.display = "block";
      } else if (pilih3V == "22") { 
        pilihan3 = "nugget-tempe-stik";
        document.getElementById("buatnugget-tempe-stik").style.display = "block";
      }
      var pilih4 = document.getElementById("pilih4");
      var pilih4V = pilih4.value;
      if (pilih4V == "1") {
        pilihan4 = "kripik-tempe";
        document.getElementById("buatkripik-tempe").style.display = "block";
      } else if (pilih4V == "2") {
        pilihan4 = "sop-bayam";
        document.getElementById("buatsop-bayam").style.display = "block";
      } else if (pilih4V == "3") { 
        pilihan4 = "mashed-potatoes";
        document.getElementById("buatmashed-potatoes").style.display = "block";
      } else if (pilih4V == "4") {
        pilihan4 = "sambel-tempe-kemanggi";
        document.getElementById("buatsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih4V == "5") { 
        pilihan4 = "sop-bayam-bening";
        document.getElementById("buatsop-bayam-bening").style.display = "block";
      } else if (pilih4V == "6") {
        pilihan4 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("buatsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih4V == "7") {
        pilihan4 = "tempe-kukus"; 
        document.getElementById("buattempe-kukus").style.display = "block";
      } else if (pilih4V == "8") {
        pilihan4 = "kentang-goreng";
        document.getElementById("buatkentang-goreng").style.display = "block";
      } else if (pilih4V == "9") { 
        pilihan4 = "tempe-sambel-penyet";
        document.getElementById("buattempe-sambel-penyet").style.display = "block";
      } else if (pilih4V == "10") {
        pilihan4 = "bayam-saus-kecap";
        document.getElementById("buatbayam-saus-kecap").style.display = "block";
      } else if (pilih4V == "11") { 
        pilihan4 = "sambel-tempe-pedas";
        document.getElementById("buatsambel-tempe-pedas").style.display = "block";
      } else if (pilih4V == "12") {
        pilihan4 = "nugget-kentang";
        document.getElementById("buatnugget-kentang").style.display = "block";
      } else if (pilih4V == "13") { 
        pilihan4 = "sandwich-bayam";
        document.getElementById("buatsandwich-bayam").style.display = "none";
      } else if (pilih4V == "14") {
        pilihan4 = "orak-arik-tempe";
        document.getElementById("buatorak-arik-tempe").style.display = "block";
      } else if (pilih4V == "15") { 
        pilihan4 = "sop-bayam-tofu";
        document.getElementById("buatsop-bayam-tofu").style.display = "block";
      } else if (pilih4V == "16") {
        pilihan4 = "tempe-geprek";
        document.getElementById("buattempe-geprek").style.display = "block";
      } else if (pilih4V == "17") { 
        pilihan4 = "sambal-balado-kentang";
        document.getElementById("buatsambal-balado-kentang").style.display = "block";
      } else if (pilih4V == "18") { 
        pilihan4 = "kripik-bayam";
        document.getElementById("buatkripik-bayam").style.display = "block";
      } else if (pilih4V == "19") {
        pilihan4 = "tempe-sambal-balado";
        document.getElementById("buattempe-sambal-balado").style.display = "block";
      } else if (pilih4V == "20") { 
        pilihan4 = "sambal-balado-kentang-pete";
        document.getElementById("buatsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih4V == "21") {
        pilihan4 = "biskuit-bayam";
        document.getElementById("buatbiskuit-bayam").style.display = "block";
      } else if (pilih4V == "22") { 
        pilihan4 = "nugget-tempe-stik";
        document.getElementById("buatnugget-tempe-stik").style.display = "block";
      }
      var pilih5 = document.getElementById("pilih5");
      var pilih5V = pilih5.value;
      if (pilih5V == "1") {
        pilihan5 = "kripik-tempe";
        document.getElementById("buatkripik-tempe").style.display = "block";
      } else if (pilih5V == "2") {
        pilihan5 = "sop-bayam";
        document.getElementById("buatsop-bayam").style.display = "block";
      } else if (pilih5V == "3") { 
        pilihan5 = "mashed-potatoes";
        document.getElementById("buatmashed-potatoes").style.display = "block";
      } else if (pilih5V == "4") {
        pilihan5 = "sambel-tempe-kemanggi";
        document.getElementById("buatsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih5V == "5") { 
        pilihan5 = "sop-bayam-bening";
        document.getElementById("buatsop-bayam-bening").style.display = "block";
      } else if (pilih5V == "6") {
        pilihan5 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("buatsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih5V == "7") {
        pilihan5 = "tempe-kukus"; 
        document.getElementById("buattempe-kukus").style.display = "block";
      } else if (pilih5V == "8") {
        pilihan5 = "kentang-goreng";
        document.getElementById("buatkentang-goreng").style.display = "block";
      } else if (pilih5V == "9") { 
        pilihan5 = "tempe-sambel-penyet";
        document.getElementById("buattempe-sambel-penyet").style.display = "block";
      } else if (pilih5V == "10") {
        pilihan5 = "bayam-saus-kecap";
        document.getElementById("buatbayam-saus-kecap").style.display = "block";
      } else if (pilih5V == "11") { 
        pilihan5 = "sambel-tempe-pedas";
        document.getElementById("buatsambel-tempe-pedas").style.display = "block";
      } else if (pilih5V == "12") {
        pilihan5 = "nugget-kentang";
        document.getElementById("buatnugget-kentang").style.display = "block";
      } else if (pilih5V == "13") { 
        pilihan5 = "sandwich-bayam";
        document.getElementById("buatsandwich-bayam").style.display = "none";
      } else if (pilih5V == "14") {
        pilihan5 = "orak-arik-tempe";
        document.getElementById("buatorak-arik-tempe").style.display = "block";
      } else if (pilih5V == "15") { 
        pilihan5 = "sop-bayam-tofu";
        document.getElementById("buatsop-bayam-tofu").style.display = "block";
      } else if (pilih5V == "16") {
        pilihan5 = "tempe-geprek";
        document.getElementById("buattempe-geprek").style.display = "block";
      } else if (pilih5V == "17") { 
        pilihan5 = "sambal-balado-kentang";
        document.getElementById("buatsambal-balado-kentang").style.display = "block";
      } else if (pilih5V == "18") { 
        pilihan5 = "kripik-bayam";
        document.getElementById("buatkripik-bayam").style.display = "block";
      } else if (pilih5V == "19") {
        pilihan5 = "tempe-sambal-balado";
        document.getElementById("buattempe-sambal-balado").style.display = "block";
      } else if (pilih5V == "20") { 
        pilihan5 = "sambal-balado-kentang-pete";
        document.getElementById("buatsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih5V == "21") {
        pilihan5 = "biskuit-bayam";
        document.getElementById("buatbiskuit-bayam").style.display = "block";
      } else if (pilih5V == "22") { 
        pilihan5 = "nugget-tempe-stik";
        document.getElementById("buatnugget-tempe-stik").style.display = "block";
      }
      var pilih6 = document.getElementById("pilih6");
      var pilih6V = pilih6.value;
      if (pilih6V == "1") {
        pilihan6 = "kripik-tempe";
        document.getElementById("buatkripik-tempe").style.display = "block";
      } else if (pilih6V == "2") {
        pilihan6 = "sop-bayam";
        document.getElementById("buatsop-bayam").style.display = "block";
      } else if (pilih6V == "3") { 
        pilihan6 = "mashed-potatoes";
        document.getElementById("buatmashed-potatoes").style.display = "block";
      } else if (pilih6V == "4") {
        pilihan6 = "sambel-tempe-kemanggi";
        document.getElementById("buatsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih6V == "5") { 
        pilihan6 = "sop-bayam-bening";
        document.getElementById("buatsop-bayam-bening").style.display = "block";
      } else if (pilih6V == "6") {
        pilihan6 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("buatsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih6V == "7") {
        pilihan6 = "tempe-kukus"; 
        document.getElementById("buattempe-kukus").style.display = "block";
      } else if (pilih6V == "8") {
        pilihan6 = "kentang-goreng";
        document.getElementById("buatkentang-goreng").style.display = "block";
      } else if (pilih6V == "9") { 
        pilihan6 = "tempe-sambel-penyet";
        document.getElementById("buattempe-sambel-penyet").style.display = "block";
      } else if (pilih6V == "10") {
        pilihan6 = "bayam-saus-kecap";
        document.getElementById("buatbayam-saus-kecap").style.display = "block";
      } else if (pilih6V == "11") { 
        pilihan6 = "sambel-tempe-pedas";
        document.getElementById("buatsambel-tempe-pedas").style.display = "block";
      } else if (pilih6V == "12") {
        pilihan6 = "nugget-kentang";
        document.getElementById("buatnugget-kentang").style.display = "block";
      } else if (pilih6V == "13") { 
        pilihan6 = "sandwich-bayam";
        document.getElementById("buatsandwich-bayam").style.display = "none";
      } else if (pilih6V == "14") {
        pilihan6 = "orak-arik-tempe";
        document.getElementById("buatorak-arik-tempe").style.display = "block";
      } else if (pilih6V == "15") { 
        pilihan6 = "sop-bayam-tofu";
        document.getElementById("buatsop-bayam-tofu").style.display = "block";
      } else if (pilih6V == "16") {
        pilihan6 = "tempe-geprek";
        document.getElementById("buattempe-geprek").style.display = "block";
      } else if (pilih6V == "17") { 
        pilihan6 = "sambal-balado-kentang";
        document.getElementById("buatsambal-balado-kentang").style.display = "block";
      } else if (pilih6V == "18") { 
        pilihan6 = "kripik-bayam";
        document.getElementById("buatkripik-bayam").style.display = "block";
      } else if (pilih6V == "19") {
        pilihan6 = "tempe-sambal-balado";
        document.getElementById("buattempe-sambal-balado").style.display = "block";
      } else if (pilih6V == "20") { 
        pilihan6 = "sambal-balado-kentang-pete";
        document.getElementById("buatsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih6V == "21") {
        pilihan6 = "biskuit-bayam";
        document.getElementById("buatbiskuit-bayam").style.display = "block";
      } else if (pilih6V == "22") { 
        pilihan6 = "nugget-tempe-stik";
        document.getElementById("buatnugget-tempe-stik").style.display = "block";
      }
      var pilih7 = document.getElementById("pilih7");
      var pilih7V = pilih7.value;
      if (pilih7V == "1") {
        pilihan7 = "kripik-tempe";
        document.getElementById("buatkripik-tempe").style.display = "block";
      } else if (pilih7V == "2") {
        pilihan7 = "sop-bayam";
        document.getElementById("buatsop-bayam").style.display = "block";
      } else if (pilih7V == "3") { 
        pilihan7 = "mashed-potatoes";
        document.getElementById("buatmashed-potatoes").style.display = "block";
      } else if (pilih7V == "4") {
        pilihan7 = "sambel-tempe-kemanggi";
        document.getElementById("buatsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih7V == "5") { 
        pilihan7 = "sop-bayam-bening";
        document.getElementById("buatsop-bayam-bening").style.display = "block";
      } else if (pilih7V == "6") {
        pilihan7 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("buatsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih7V == "7") {
        pilihan7 = "tempe-kukus"; 
        document.getElementById("buattempe-kukus").style.display = "block";
      } else if (pilih7V == "8") {
        pilihan7 = "kentang-goreng";
        document.getElementById("buatkentang-goreng").style.display = "block";
      } else if (pilih7V == "9") { 
        pilihan7 = "tempe-sambel-penyet";
        document.getElementById("buattempe-sambel-penyet").style.display = "block";
      } else if (pilih7V == "10") {
        pilihan7 = "bayam-saus-kecap";
        document.getElementById("buatbayam-saus-kecap").style.display = "block";
      } else if (pilih7V == "11") { 
        pilihan7 = "sambel-tempe-pedas";
        document.getElementById("buatsambel-tempe-pedas").style.display = "block";
      } else if (pilih7V == "12") {
        pilihan7 = "nugget-kentang";
        document.getElementById("buatnugget-kentang").style.display = "block";
      } else if (pilih7V == "13") { 
        pilihan7 = "sandwich-bayam";
        document.getElementById("buatsandwich-bayam").style.display = "none";
      } else if (pilih7V == "14") {
        pilihan7 = "orak-arik-tempe";
        document.getElementById("buatorak-arik-tempe").style.display = "block";
      } else if (pilih7V == "15") { 
        pilihan7 = "sop-bayam-tofu";
        document.getElementById("buatsop-bayam-tofu").style.display = "block";
      } else if (pilih7V == "16") {
        pilihan7 = "tempe-geprek";
        document.getElementById("buattempe-geprek").style.display = "block";
      } else if (pilih7V == "17") { 
        pilihan7 = "sambal-balado-kentang";
        document.getElementById("buatsambal-balado-kentang").style.display = "block";
      } else if (pilih7V == "18") { 
        pilihan7 = "kripik-bayam";
        document.getElementById("buatkripik-bayam").style.display = "block";
      } else if (pilih7V == "19") {
        pilihan7 = "tempe-sambal-balado";
        document.getElementById("buattempe-sambal-balado").style.display = "block";
      } else if (pilih7V == "20") { 
        pilihan7 = "sambal-balado-kentang-pete";
        document.getElementById("buatsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih7V == "21") {
        pilihan7 = "biskuit-bayam";
        document.getElementById("buatbiskuit-bayam").style.display = "block";
      } else if (pilih7V == "22") { 
        pilihan7 = "nugget-tempe-stik";
        document.getElementById("buatnugget-tempe-stik").style.display = "block";
      }
    }
  </script>
  <!-- Akhir Pilih Makanan -->

  <!-- Buat Rencana -->
  <script type="text/JavaScript">
    function buat() {
      document.getElementById("track1").style.display = "none";
      document.getElementById("track2").style.display = "none";
      document.getElementById("track3").style.display = "none";
      document.getElementById("track4").style.display = "block";
      document.getElementById("cari").style.display = "none";
      document.getElementById("daftar-makanan").style.display = "none";
      document.getElementById("pilih").style.display = "none";
      document.getElementById("buat").style.display = "none";
      document.getElementById("simpan").style.display = "block";
      var pilihan1, pilihan2, pilihan3, pilihan4, pilihan5, pilihan6, pilihan7;
      var pilih1 = document.getElementById("pilih1");
      var pilih1V = pilih1.value;
      if (pilih1V == "1") {
        pilihan1 = "kripik-tempe";
        document.getElementById("simpankripik-tempe").style.display = "block";
      } else if (pilih1V == "2") {
        pilihan1 = "sop-bayam";
        document.getElementById("simpansop-bayam").style.display = "block";
      } else if (pilih1V == "3") { 
        pilihan1 = "mashed-potatoes";
        document.getElementById("simpanmashed-potatoes").style.display = "block";
      } else if (pilih1V == "4") {
        pilihan1 = "sambel-tempe-kemanggi";
        document.getElementById("simpansambel-tempe-kemanggi").style.display = "block";
      } else if (pilih1V == "5") { 
        pilihan1 = "sop-bayam-bening";
        document.getElementById("simpansop-bayam-bening").style.display = "block";
      } else if (pilih1V == "6") {
        pilihan1 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("simpansayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih1V == "7") {
        pilihan1 = "tempe-kukus"; 
        document.getElementById("simpantempe-kukus").style.display = "block";
      } else if (pilih1V == "8") {
        pilihan1 = "kentang-goreng";
        document.getElementById("simpankentang-goreng").style.display = "block";
      } else if (pilih1V == "9") { 
        pilihan1 = "tempe-sambel-penyet";
        document.getElementById("simpantempe-sambel-penyet").style.display = "block";
      } else if (pilih1V == "10") {
        pilihan1 = "bayam-saus-kecap";
        document.getElementById("simpanbayam-saus-kecap").style.display = "block";
      } else if (pilih1V == "11") { 
        pilihan1 = "sambel-tempe-pedas";
        document.getElementById("simpansambel-tempe-pedas").style.display = "block";
      } else if (pilih1V == "12") {
        pilihan1 = "nugget-kentang";
        document.getElementById("simpannugget-kentang").style.display = "block";
      } else if (pilih1V == "13") { 
        pilihan1 = "sandwich-bayam";
        document.getElementById("simpansandwich-bayam").style.display = "none";
      } else if (pilih1V == "14") {
        pilihan1 = "orak-arik-tempe";
        document.getElementById("simpanorak-arik-tempe").style.display = "block";
      } else if (pilih1V == "15") { 
        pilihan1 = "sop-bayam-tofu";
        document.getElementById("simpansop-bayam-tofu").style.display = "block";
      } else if (pilih1V == "16") {
        pilihan1 = "tempe-geprek";
        document.getElementById("simpantempe-geprek").style.display = "block";
      } else if (pilih1V == "17") { 
        pilihan1 = "sambal-balado-kentang";
        document.getElementById("simpansambal-balado-kentang").style.display = "block";
      } else if (pilih1V == "18") { 
        pilihan1 = "kripik-bayam";
        document.getElementById("simpankripik-bayam").style.display = "block";
      } else if (pilih1V == "19") {
        pilihan1 = "tempe-sambal-balado";
        document.getElementById("simpantempe-sambal-balado").style.display = "block";
      } else if (pilih1V == "20") { 
        pilihan1 = "sambal-balado-kentang-pete";
        document.getElementById("simpansambal-balado-kentang-pete").style.display = "block";
      } else if (pilih1V == "21") {
        pilihan1 = "biskuit-bayam";
        document.getElementById("simpanbiskuit-bayam").style.display = "block";
      } else if (pilih1V == "22") { 
        pilihan1 = "nugget-tempe-stik";
        document.getElementById("simpannugget-tempe-stik").style.display = "block";
      }
      var pilih2 = document.getElementById("pilih2");
      var pilih2V = pilih2.value;
      if (pilih2V == "1") {
        pilihan2 = "kripik-tempe";
        document.getElementById("simpankripik-tempe").style.display = "block";
      } else if (pilih2V == "2") {
        pilihan2 = "sop-bayam";
        document.getElementById("simpansop-bayam").style.display = "block";
      } else if (pilih2V == "3") { 
        pilihan2 = "mashed-potatoes";
        document.getElementById("simpanmashed-potatoes").style.display = "block";
      } else if (pilih2V == "4") {
        pilihan2 = "sambel-tempe-kemanggi";
        document.getElementById("simpansambel-tempe-kemanggi").style.display = "block";
      } else if (pilih2V == "5") { 
        pilihan2 = "sop-bayam-bening";
        document.getElementById("simpansop-bayam-bening").style.display = "block";
      } else if (pilih2V == "6") {
        pilihan2 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("simpansayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih2V == "7") {
        pilihan2 = "tempe-kukus"; 
        document.getElementById("simpantempe-kukus").style.display = "block";
      } else if (pilih2V == "8") {
        pilihan2 = "kentang-goreng";
        document.getElementById("simpankentang-goreng").style.display = "block";
      } else if (pilih2V == "9") { 
        pilihan2 = "tempe-sambel-penyet";
        document.getElementById("simpantempe-sambel-penyet").style.display = "block";
      } else if (pilih2V == "10") {
        pilihan2 = "bayam-saus-kecap";
        document.getElementById("simpanbayam-saus-kecap").style.display = "block";
      } else if (pilih2V == "11") { 
        pilihan2 = "sambel-tempe-pedas";
        document.getElementById("simpansambel-tempe-pedas").style.display = "block";
      } else if (pilih2V == "12") {
        pilihan2 = "nugget-kentang";
        document.getElementById("simpannugget-kentang").style.display = "block";
      } else if (pilih2V == "13") { 
        pilihan2 = "sandwich-bayam";
        document.getElementById("simpansandwich-bayam").style.display = "none";
      } else if (pilih2V == "14") {
        pilihan2 = "orak-arik-tempe";
        document.getElementById("simpanorak-arik-tempe").style.display = "block";
      } else if (pilih2V == "15") { 
        pilihan2 = "sop-bayam-tofu";
        document.getElementById("simpansop-bayam-tofu").style.display = "block";
      } else if (pilih2V == "16") {
        pilihan2 = "tempe-geprek";
        document.getElementById("simpantempe-geprek").style.display = "block";
      } else if (pilih2V == "17") { 
        pilihan2 = "sambal-balado-kentang";
        document.getElementById("simpansambal-balado-kentang").style.display = "block";
      } else if (pilih2V == "18") { 
        pilihan2 = "kripik-bayam";
        document.getElementById("simpankripik-bayam").style.display = "block";
      } else if (pilih2V == "19") {
        pilihan2 = "tempe-sambal-balado";
        document.getElementById("simpantempe-sambal-balado").style.display = "block";
      } else if (pilih2V == "20") { 
        pilihan2 = "sambal-balado-kentang-pete";
        document.getElementById("simpansambal-balado-kentang-pete").style.display = "block";
      } else if (pilih2V == "21") {
        pilihan2 = "biskuit-bayam";
        document.getElementById("simpanbiskuit-bayam").style.display = "block";
      } else if (pilih2V == "22") { 
        pilihan2 = "nugget-tempe-stik";
        document.getElementById("simpannugget-tempe-stik").style.display = "block";
      }
      var pilih3 = document.getElementById("pilih3");
      var pilih3V = pilih3.value;
      if (pilih3V == "1") {
        pilihan3 = "kripik-tempe";
        document.getElementById("simpankripik-tempe").style.display = "block";
      } else if (pilih3V == "2") {
        pilihan3 = "sop-bayam";
        document.getElementById("simpansop-bayam").style.display = "block";
      } else if (pilih3V == "3") { 
        pilihan3 = "mashed-potatoes";
        document.getElementById("simpanmashed-potatoes").style.display = "block";
      } else if (pilih3V == "4") {
        pilihan3 = "sambel-tempe-kemanggi";
        document.getElementById("simpansambel-tempe-kemanggi").style.display = "block";
      } else if (pilih3V == "5") { 
        pilihan3 = "sop-bayam-bening";
        document.getElementById("simpansop-bayam-bening").style.display = "block";
      } else if (pilih3V == "6") {
        pilihan3 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("simpansayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih3V == "7") {
        pilihan3 = "tempe-kukus"; 
        document.getElementById("simpantempe-kukus").style.display = "block";
      } else if (pilih3V == "8") {
        pilihan3 = "kentang-goreng";
        document.getElementById("simpankentang-goreng").style.display = "block";
      } else if (pilih3V == "9") { 
        pilihan3 = "tempe-sambel-penyet";
        document.getElementById("simpantempe-sambel-penyet").style.display = "block";
      } else if (pilih3V == "10") {
        pilihan3 = "bayam-saus-kecap";
        document.getElementById("simpanbayam-saus-kecap").style.display = "block";
      } else if (pilih3V == "11") { 
        pilihan3 = "sambel-tempe-pedas";
        document.getElementById("simpansambel-tempe-pedas").style.display = "block";
      } else if (pilih3V == "12") {
        pilihan3 = "nugget-kentang";
        document.getElementById("simpannugget-kentang").style.display = "block";
      } else if (pilih3V == "13") { 
        pilihan3 = "sandwich-bayam";
        document.getElementById("simpansandwich-bayam").style.display = "none";
      } else if (pilih3V == "14") {
        pilihan3 = "orak-arik-tempe";
        document.getElementById("simpanorak-arik-tempe").style.display = "block";
      } else if (pilih3V == "15") { 
        pilihan3 = "sop-bayam-tofu";
        document.getElementById("simpansop-bayam-tofu").style.display = "block";
      } else if (pilih3V == "16") {
        pilihan3 = "tempe-geprek";
        document.getElementById("simpantempe-geprek").style.display = "block";
      } else if (pilih3V == "17") { 
        pilihan3 = "sambal-balado-kentang";
        document.getElementById("simpansambal-balado-kentang").style.display = "block";
      } else if (pilih3V == "18") { 
        pilihan3 = "kripik-bayam";
        document.getElementById("simpankripik-bayam").style.display = "block";
      } else if (pilih3V == "19") {
        pilihan3 = "tempe-sambal-balado";
        document.getElementById("simpantempe-sambal-balado").style.display = "block";
      } else if (pilih3V == "20") { 
        pilihan3 = "sambal-balado-kentang-pete";
        document.getElementById("simpansambal-balado-kentang-pete").style.display = "block";
      } else if (pilih3V == "21") {
        pilihan3 = "biskuit-bayam";
        document.getElementById("simpanbiskuit-bayam").style.display = "block";
      } else if (pilih3V == "22") { 
        pilihan3 = "nugget-tempe-stik";
        document.getElementById("simpannugget-tempe-stik").style.display = "block";
      }
      var pilih4 = document.getElementById("pilih4");
      var pilih4V = pilih4.value;
      if (pilih4V == "1") {
        pilihan4 = "kripik-tempe";
        document.getElementById("simpankripik-tempe").style.display = "block";
      } else if (pilih4V == "2") {
        pilihan4 = "sop-bayam";
        document.getElementById("simpansop-bayam").style.display = "block";
      } else if (pilih4V == "3") { 
        pilihan4 = "mashed-potatoes";
        document.getElementById("simpanmashed-potatoes").style.display = "block";
      } else if (pilih4V == "4") {
        pilihan4 = "sambel-tempe-kemanggi";
        document.getElementById("simpansambel-tempe-kemanggi").style.display = "block";
      } else if (pilih4V == "5") { 
        pilihan4 = "sop-bayam-bening";
        document.getElementById("simpansop-bayam-bening").style.display = "block";
      } else if (pilih4V == "6") {
        pilihan4 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("simpansayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih4V == "7") {
        pilihan4 = "tempe-kukus"; 
        document.getElementById("simpantempe-kukus").style.display = "block";
      } else if (pilih4V == "8") {
        pilihan4 = "kentang-goreng";
        document.getElementById("simpankentang-goreng").style.display = "block";
      } else if (pilih4V == "9") { 
        pilihan4 = "tempe-sambel-penyet";
        document.getElementById("simpantempe-sambel-penyet").style.display = "block";
      } else if (pilih4V == "10") {
        pilihan4 = "bayam-saus-kecap";
        document.getElementById("simpanbayam-saus-kecap").style.display = "block";
      } else if (pilih4V == "11") { 
        pilihan4 = "sambel-tempe-pedas";
        document.getElementById("simpansambel-tempe-pedas").style.display = "block";
      } else if (pilih4V == "12") {
        pilihan4 = "nugget-kentang";
        document.getElementById("simpannugget-kentang").style.display = "block";
      } else if (pilih4V == "13") { 
        pilihan4 = "sandwich-bayam";
        document.getElementById("simpansandwich-bayam").style.display = "none";
      } else if (pilih4V == "14") {
        pilihan4 = "orak-arik-tempe";
        document.getElementById("simpanorak-arik-tempe").style.display = "block";
      } else if (pilih4V == "15") { 
        pilihan4 = "sop-bayam-tofu";
        document.getElementById("simpansop-bayam-tofu").style.display = "block";
      } else if (pilih4V == "16") {
        pilihan4 = "tempe-geprek";
        document.getElementById("simpantempe-geprek").style.display = "block";
      } else if (pilih4V == "17") { 
        pilihan4 = "sambal-balado-kentang";
        document.getElementById("simpansambal-balado-kentang").style.display = "block";
      } else if (pilih4V == "18") { 
        pilihan4 = "kripik-bayam";
        document.getElementById("simpankripik-bayam").style.display = "block";
      } else if (pilih4V == "19") {
        pilihan4 = "tempe-sambal-balado";
        document.getElementById("simpantempe-sambal-balado").style.display = "block";
      } else if (pilih4V == "20") { 
        pilihan4 = "sambal-balado-kentang-pete";
        document.getElementById("simpansambal-balado-kentang-pete").style.display = "block";
      } else if (pilih4V == "21") {
        pilihan4 = "biskuit-bayam";
        document.getElementById("simpanbiskuit-bayam").style.display = "block";
      } else if (pilih4V == "22") { 
        pilihan4 = "nugget-tempe-stik";
        document.getElementById("simpannugget-tempe-stik").style.display = "block";
      }
      var pilih5 = document.getElementById("pilih5");
      var pilih5V = pilih5.value;
      if (pilih5V == "1") {
        pilihan5 = "kripik-tempe";
        document.getElementById("simpankripik-tempe").style.display = "block";
      } else if (pilih5V == "2") {
        pilihan5 = "sop-bayam";
        document.getElementById("simpansop-bayam").style.display = "block";
      } else if (pilih5V == "3") { 
        pilihan5 = "mashed-potatoes";
        document.getElementById("simpanmashed-potatoes").style.display = "block";
      } else if (pilih5V == "4") {
        pilihan5 = "sambel-tempe-kemanggi";
        document.getElementById("simpansambel-tempe-kemanggi").style.display = "block";
      } else if (pilih5V == "5") { 
        pilihan5 = "sop-bayam-bening";
        document.getElementById("simpansop-bayam-bening").style.display = "block";
      } else if (pilih5V == "6") {
        pilihan5 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("simpansayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih5V == "7") {
        pilihan5 = "tempe-kukus"; 
        document.getElementById("simpantempe-kukus").style.display = "block";
      } else if (pilih5V == "8") {
        pilihan5 = "kentang-goreng";
        document.getElementById("simpankentang-goreng").style.display = "block";
      } else if (pilih5V == "9") { 
        pilihan5 = "tempe-sambel-penyet";
        document.getElementById("simpantempe-sambel-penyet").style.display = "block";
      } else if (pilih5V == "10") {
        pilihan5 = "bayam-saus-kecap";
        document.getElementById("simpanbayam-saus-kecap").style.display = "block";
      } else if (pilih5V == "11") { 
        pilihan5 = "sambel-tempe-pedas";
        document.getElementById("simpansambel-tempe-pedas").style.display = "block";
      } else if (pilih5V == "12") {
        pilihan5 = "nugget-kentang";
        document.getElementById("simpannugget-kentang").style.display = "block";
      } else if (pilih5V == "13") { 
        pilihan5 = "sandwich-bayam";
        document.getElementById("simpansandwich-bayam").style.display = "none";
      } else if (pilih5V == "14") {
        pilihan5 = "orak-arik-tempe";
        document.getElementById("simpanorak-arik-tempe").style.display = "block";
      } else if (pilih5V == "15") { 
        pilihan5 = "sop-bayam-tofu";
        document.getElementById("simpansop-bayam-tofu").style.display = "block";
      } else if (pilih5V == "16") {
        pilihan5 = "tempe-geprek";
        document.getElementById("simpantempe-geprek").style.display = "block";
      } else if (pilih5V == "17") { 
        pilihan5 = "sambal-balado-kentang";
        document.getElementById("simpansambal-balado-kentang").style.display = "block";
      } else if (pilih5V == "18") { 
        pilihan5 = "kripik-bayam";
        document.getElementById("simpankripik-bayam").style.display = "block";
      } else if (pilih5V == "19") {
        pilihan5 = "tempe-sambal-balado";
        document.getElementById("simpantempe-sambal-balado").style.display = "block";
      } else if (pilih5V == "20") { 
        pilihan5 = "sambal-balado-kentang-pete";
        document.getElementById("simpansambal-balado-kentang-pete").style.display = "block";
      } else if (pilih5V == "21") {
        pilihan5 = "biskuit-bayam";
        document.getElementById("simpanbiskuit-bayam").style.display = "block";
      } else if (pilih5V == "22") { 
        pilihan5 = "nugget-tempe-stik";
        document.getElementById("simpannugget-tempe-stik").style.display = "block";
      }
      var pilih6 = document.getElementById("pilih6");
      var pilih6V = pilih6.value;
      if (pilih6V == "1") {
        pilihan6 = "kripik-tempe";
        document.getElementById("simpankripik-tempe").style.display = "block";
      } else if (pilih6V == "2") {
        pilihan6 = "sop-bayam";
        document.getElementById("simpansop-bayam").style.display = "block";
      } else if (pilih6V == "3") { 
        pilihan6 = "mashed-potatoes";
        document.getElementById("simpanmashed-potatoes").style.display = "block";
      } else if (pilih6V == "4") {
        pilihan6 = "sambel-tempe-kemanggi";
        document.getElementById("simpansambel-tempe-kemanggi").style.display = "block";
      } else if (pilih6V == "5") { 
        pilihan6 = "sop-bayam-bening";
        document.getElementById("simpansop-bayam-bening").style.display = "block";
      } else if (pilih6V == "6") {
        pilihan6 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("simpansayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih6V == "7") {
        pilihan6 = "tempe-kukus"; 
        document.getElementById("simpantempe-kukus").style.display = "block";
      } else if (pilih6V == "8") {
        pilihan6 = "kentang-goreng";
        document.getElementById("simpankentang-goreng").style.display = "block";
      } else if (pilih6V == "9") { 
        pilihan6 = "tempe-sambel-penyet";
        document.getElementById("simpantempe-sambel-penyet").style.display = "block";
      } else if (pilih6V == "10") {
        pilihan6 = "bayam-saus-kecap";
        document.getElementById("simpanbayam-saus-kecap").style.display = "block";
      } else if (pilih6V == "11") { 
        pilihan6 = "sambel-tempe-pedas";
        document.getElementById("simpansambel-tempe-pedas").style.display = "block";
      } else if (pilih6V == "12") {
        pilihan6 = "nugget-kentang";
        document.getElementById("simpannugget-kentang").style.display = "block";
      } else if (pilih6V == "13") { 
        pilihan6 = "sandwich-bayam";
        document.getElementById("simpansandwich-bayam").style.display = "none";
      } else if (pilih6V == "14") {
        pilihan6 = "orak-arik-tempe";
        document.getElementById("simpanorak-arik-tempe").style.display = "block";
      } else if (pilih6V == "15") { 
        pilihan6 = "sop-bayam-tofu";
        document.getElementById("simpansop-bayam-tofu").style.display = "block";
      } else if (pilih6V == "16") {
        pilihan6 = "tempe-geprek";
        document.getElementById("simpantempe-geprek").style.display = "block";
      } else if (pilih6V == "17") { 
        pilihan6 = "sambal-balado-kentang";
        document.getElementById("simpansambal-balado-kentang").style.display = "block";
      } else if (pilih6V == "18") { 
        pilihan6 = "kripik-bayam";
        document.getElementById("simpankripik-bayam").style.display = "block";
      } else if (pilih6V == "19") {
        pilihan6 = "tempe-sambal-balado";
        document.getElementById("simpantempe-sambal-balado").style.display = "block";
      } else if (pilih6V == "20") { 
        pilihan6 = "sambal-balado-kentang-pete";
        document.getElementById("simpansambal-balado-kentang-pete").style.display = "block";
      } else if (pilih6V == "21") {
        pilihan6 = "biskuit-bayam";
        document.getElementById("simpanbiskuit-bayam").style.display = "block";
      } else if (pilih6V == "22") { 
        pilihan6 = "nugget-tempe-stik";
        document.getElementById("simpannugget-tempe-stik").style.display = "block";
      }
      var pilih7 = document.getElementById("pilih7");
      var pilih7V = pilih7.value;
      if (pilih7V == "1") {
        pilihan7 = "kripik-tempe";
        document.getElementById("simpankripik-tempe").style.display = "block";
      } else if (pilih7V == "2") {
        pilihan7 = "sop-bayam";
        document.getElementById("simpansop-bayam").style.display = "block";
      } else if (pilih7V == "3") { 
        pilihan7 = "mashed-potatoes";
        document.getElementById("simpanmashed-potatoes").style.display = "block";
      } else if (pilih7V == "4") {
        pilihan7 = "sambel-tempe-kemanggi";
        document.getElementById("simpansambel-tempe-kemanggi").style.display = "block";
      } else if (pilih7V == "5") { 
        pilihan7 = "sop-bayam-bening";
        document.getElementById("simpansop-bayam-bening").style.display = "block";
      } else if (pilih7V == "6") {
        pilihan7 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("simpansayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih7V == "7") {
        pilihan7 = "tempe-kukus"; 
        document.getElementById("simpantempe-kukus").style.display = "block";
      } else if (pilih7V == "8") {
        pilihan7 = "kentang-goreng";
        document.getElementById("simpankentang-goreng").style.display = "block";
      } else if (pilih7V == "9") { 
        pilihan7 = "tempe-sambel-penyet";
        document.getElementById("simpantempe-sambel-penyet").style.display = "block";
      } else if (pilih7V == "10") {
        pilihan7 = "bayam-saus-kecap";
        document.getElementById("simpanbayam-saus-kecap").style.display = "block";
      } else if (pilih7V == "11") { 
        pilihan7 = "sambel-tempe-pedas";
        document.getElementById("simpansambel-tempe-pedas").style.display = "block";
      } else if (pilih7V == "12") {
        pilihan7 = "nugget-kentang";
        document.getElementById("simpannugget-kentang").style.display = "block";
      } else if (pilih7V == "13") { 
        pilihan7 = "sandwich-bayam";
        document.getElementById("simpansandwich-bayam").style.display = "none";
      } else if (pilih7V == "14") {
        pilihan7 = "orak-arik-tempe";
        document.getElementById("simpanorak-arik-tempe").style.display = "block";
      } else if (pilih7V == "15") { 
        pilihan7 = "sop-bayam-tofu";
        document.getElementById("simpansop-bayam-tofu").style.display = "block";
      } else if (pilih7V == "16") {
        pilihan7 = "tempe-geprek";
        document.getElementById("simpantempe-geprek").style.display = "block";
      } else if (pilih7V == "17") { 
        pilihan7 = "sambal-balado-kentang";
        document.getElementById("simpansambal-balado-kentang").style.display = "block";
      } else if (pilih7V == "18") { 
        pilihan7 = "kripik-bayam";
        document.getElementById("simpankripik-bayam").style.display = "block";
      } else if (pilih7V == "19") {
        pilihan7 = "tempe-sambal-balado";
        document.getElementById("simpantempe-sambal-balado").style.display = "block";
      } else if (pilih7V == "20") { 
        pilihan7 = "sambal-balado-kentang-pete";
        document.getElementById("simpansambal-balado-kentang-pete").style.display = "block";
      } else if (pilih7V == "21") {
        pilihan7 = "biskuit-bayam";
        document.getElementById("simpanbiskuit-bayam").style.display = "block";
      } else if (pilih7V == "22") { 
        pilihan7 = "nugget-tempe-stik";
        document.getElementById("simpannugget-tempe-stik").style.display = "block";
      }
    }
  </script>
  <!-- Akhir Buat Rencana -->

  <!-- Simpan ke Database -->
  <script type="text/javascript">
    function simpan() {
      document.getElementById("track1").style.display = "none";
      document.getElementById("track2").style.display = "none";
      document.getElementById("track3").style.display = "none";
      document.getElementById("track4").style.display = "none";
      document.getElementById("cari").style.display = "none";
      document.getElementById("daftar-makanan").style.display = "none";
      document.getElementById("pilih").style.display = "none";
      document.getElementById("buat").style.display = "none";
      document.getElementById("simpan").style.display = "none";
      document.getElementById("profil").style.display = "block";
      var pilihan1, pilihan2, pilihan3, pilihan4, pilihan5, pilihan6, pilihan7;
      var pilih1 = document.getElementById("pilih1");
      var pilih1V = pilih1.value;
      if (pilih1V == "1") {
        pilihan1 = "kripik-tempe";
        document.getElementById("profilkripik-tempe").style.display = "block";
      } else if (pilih1V == "2") {
        pilihan1 = "sop-bayam";
        document.getElementById("profilsop-bayam").style.display = "block";
      } else if (pilih1V == "3") {
        pilihan1 = "mashed-potatoes";
        document.getElementById("profilmashed-potatoes").style.display = "block";
      } else if (pilih1V == "4") {
        pilihan1 = "sambel-tempe-kemanggi";
        document.getElementById("profilsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih1V == "5") {
        pilihan1 = "sop-bayam-bening";
        document.getElementById("profilsop-bayam-bening").style.display = "block";
      } else if (pilih1V == "6") {
        pilihan1 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("profilsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih1V == "7") {
        pilihan1 = "tempe-kukus";
        document.getElementById("profiltempe-kukus").style.display = "block";
      } else if (pilih1V == "8") {
        pilihan1 = "kentang-goreng";
        document.getElementById("profilkentang-goreng").style.display = "block";
      } else if (pilih1V == "9") {
        pilihan1 = "tempe-sambel-penyet";
        document.getElementById("profiltempe-sambel-penyet").style.display = "block";
      } else if (pilih1V == "10") {
        pilihan1 = "bayam-saus-kecap";
        document.getElementById("profilbayam-saus-kecap").style.display = "block";
      } else if (pilih1V == "11") {
        pilihan1 = "sambel-tempe-pedas";
        document.getElementById("profilsambel-tempe-pedas").style.display = "block";
      } else if (pilih1V == "12") {
        pilihan1 = "nugget-kentang";
        document.getElementById("profilnugget-kentang").style.display = "block";
      } else if (pilih1V == "13") {
        pilihan1 = "sandwich-bayam";
        document.getElementById("profilsandwich-bayam").style.display = "none";
      } else if (pilih1V == "14") {
        pilihan1 = "orak-arik-tempe";
        document.getElementById("profilorak-arik-tempe").style.display = "block";
      } else if (pilih1V == "15") {
        pilihan1 = "sop-bayam-tofu";
        document.getElementById("profilsop-bayam-tofu").style.display = "block";
      } else if (pilih1V == "16") {
        pilihan1 = "tempe-geprek";
        document.getElementById("profiltempe-geprek").style.display = "block";
      } else if (pilih1V == "17") {
        pilihan1 = "sambal-balado-kentang";
        document.getElementById("profilsambal-balado-kentang").style.display = "block";
      } else if (pilih1V == "18") {
        pilihan1 = "kripik-bayam";
        document.getElementById("profilkripik-bayam").style.display = "block";
      } else if (pilih1V == "19") {
        pilihan1 = "tempe-sambal-balado";
        document.getElementById("profiltempe-sambal-balado").style.display = "block";
      } else if (pilih1V == "20") {
        pilihan1 = "sambal-balado-kentang-pete";
        document.getElementById("profilsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih1V == "21") {
        pilihan1 = "biskuit-bayam";
        document.getElementById("profilbiskuit-bayam").style.display = "block";
      } else if (pilih1V == "22") {
        pilihan1 = "nugget-tempe-stik";
        document.getElementById("profilnugget-tempe-stik").style.display = "block";
      }
      var pilih2 = document.getElementById("pilih2");
      var pilih2V = pilih2.value;
      if (pilih2V == "1") {
        pilihan2 = "kripik-tempe";
        document.getElementById("profilkripik-tempe").style.display = "block";
      } else if (pilih2V == "2") {
        pilihan2 = "sop-bayam";
        document.getElementById("profilsop-bayam").style.display = "block";
      } else if (pilih2V == "3") {
        pilihan2 = "mashed-potatoes";
        document.getElementById("profilmashed-potatoes").style.display = "block";
      } else if (pilih2V == "4") {
        pilihan2 = "sambel-tempe-kemanggi";
        document.getElementById("profilsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih2V == "5") {
        pilihan2 = "sop-bayam-bening";
        document.getElementById("profilsop-bayam-bening").style.display = "block";
      } else if (pilih2V == "6") {
        pilihan2 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("profilsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih2V == "7") {
        pilihan2 = "tempe-kukus";
        document.getElementById("profiltempe-kukus").style.display = "block";
      } else if (pilih2V == "8") {
        pilihan2 = "kentang-goreng";
        document.getElementById("profilkentang-goreng").style.display = "block";
      } else if (pilih2V == "9") {
        pilihan2 = "tempe-sambel-penyet";
        document.getElementById("profiltempe-sambel-penyet").style.display = "block";
      } else if (pilih2V == "10") {
        pilihan2 = "bayam-saus-kecap";
        document.getElementById("profilbayam-saus-kecap").style.display = "block";
      } else if (pilih2V == "11") {
        pilihan2 = "sambel-tempe-pedas";
        document.getElementById("profilsambel-tempe-pedas").style.display = "block";
      } else if (pilih2V == "12") {
        pilihan2 = "nugget-kentang";
        document.getElementById("profilnugget-kentang").style.display = "block";
      } else if (pilih2V == "13") {
        pilihan2 = "sandwich-bayam";
        document.getElementById("profilsandwich-bayam").style.display = "none";
      } else if (pilih2V == "14") {
        pilihan2 = "orak-arik-tempe";
        document.getElementById("profilorak-arik-tempe").style.display = "block";
      } else if (pilih2V == "15") {
        pilihan2 = "sop-bayam-tofu";
        document.getElementById("profilsop-bayam-tofu").style.display = "block";
      } else if (pilih2V == "16") {
        pilihan2 = "tempe-geprek";
        document.getElementById("profiltempe-geprek").style.display = "block";
      } else if (pilih2V == "17") {
        pilihan2 = "sambal-balado-kentang";
        document.getElementById("profilsambal-balado-kentang").style.display = "block";
      } else if (pilih2V == "18") {
        pilihan2 = "kripik-bayam";
        document.getElementById("profilkripik-bayam").style.display = "block";
      } else if (pilih2V == "19") {
        pilihan2 = "tempe-sambal-balado";
        document.getElementById("profiltempe-sambal-balado").style.display = "block";
      } else if (pilih2V == "20") {
        pilihan2 = "sambal-balado-kentang-pete";
        document.getElementById("profilsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih2V == "21") {
        pilihan2 = "biskuit-bayam";
        document.getElementById("profilbiskuit-bayam").style.display = "block";
      } else if (pilih2V == "22") {
        pilihan2 = "nugget-tempe-stik";
        document.getElementById("profilnugget-tempe-stik").style.display = "block";
      }
      var pilih3 = document.getElementById("pilih3");
      var pilih3V = pilih3.value;
      if (pilih3V == "1") {
        pilihan3 = "kripik-tempe";
        document.getElementById("profilkripik-tempe").style.display = "block";
      } else if (pilih3V == "2") {
        pilihan3 = "sop-bayam";
        document.getElementById("profilsop-bayam").style.display = "block";
      } else if (pilih3V == "3") {
        pilihan3 = "mashed-potatoes";
        document.getElementById("profilmashed-potatoes").style.display = "block";
      } else if (pilih3V == "4") {
        pilihan3 = "sambel-tempe-kemanggi";
        document.getElementById("profilsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih3V == "5") {
        pilihan3 = "sop-bayam-bening";
        document.getElementById("profilsop-bayam-bening").style.display = "block";
      } else if (pilih3V == "6") {
        pilihan3 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("profilsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih3V == "7") {
        pilihan3 = "tempe-kukus";
        document.getElementById("profiltempe-kukus").style.display = "block";
      } else if (pilih3V == "8") {
        pilihan3 = "kentang-goreng";
        document.getElementById("profilkentang-goreng").style.display = "block";
      } else if (pilih3V == "9") {
        pilihan3 = "tempe-sambel-penyet";
        document.getElementById("profiltempe-sambel-penyet").style.display = "block";
      } else if (pilih3V == "10") {
        pilihan3 = "bayam-saus-kecap";
        document.getElementById("profilbayam-saus-kecap").style.display = "block";
      } else if (pilih3V == "11") {
        pilihan3 = "sambel-tempe-pedas";
        document.getElementById("profilsambel-tempe-pedas").style.display = "block";
      } else if (pilih3V == "12") {
        pilihan3 = "nugget-kentang";
        document.getElementById("profilnugget-kentang").style.display = "block";
      } else if (pilih3V == "13") {
        pilihan3 = "sandwich-bayam";
        document.getElementById("profilsandwich-bayam").style.display = "none";
      } else if (pilih3V == "14") {
        pilihan3 = "orak-arik-tempe";
        document.getElementById("profilorak-arik-tempe").style.display = "block";
      } else if (pilih3V == "15") {
        pilihan3 = "sop-bayam-tofu";
        document.getElementById("profilsop-bayam-tofu").style.display = "block";
      } else if (pilih3V == "16") {
        pilihan3 = "tempe-geprek";
        document.getElementById("profiltempe-geprek").style.display = "block";
      } else if (pilih3V == "17") {
        pilihan3 = "sambal-balado-kentang";
        document.getElementById("profilsambal-balado-kentang").style.display = "block";
      } else if (pilih3V == "18") {
        pilihan3 = "kripik-bayam";
        document.getElementById("profilkripik-bayam").style.display = "block";
      } else if (pilih3V == "19") {
        pilihan3 = "tempe-sambal-balado";
        document.getElementById("profiltempe-sambal-balado").style.display = "block";
      } else if (pilih3V == "20") {
        pilihan3 = "sambal-balado-kentang-pete";
        document.getElementById("profilsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih3V == "21") {
        pilihan3 = "biskuit-bayam";
        document.getElementById("profilbiskuit-bayam").style.display = "block";
      } else if (pilih3V == "22") {
        pilihan3 = "nugget-tempe-stik";
        document.getElementById("profilnugget-tempe-stik").style.display = "block";
      }
      var pilih4 = document.getElementById("pilih4");
      var pilih4V = pilih4.value;
      if (pilih4V == "1") {
        pilihan4 = "kripik-tempe";
        document.getElementById("profilkripik-tempe").style.display = "block";
      } else if (pilih4V == "2") {
        pilihan4 = "sop-bayam";
        document.getElementById("profilsop-bayam").style.display = "block";
      } else if (pilih4V == "3") {
        pilihan4 = "mashed-potatoes";
        document.getElementById("profilmashed-potatoes").style.display = "block";
      } else if (pilih4V == "4") {
        pilihan4 = "sambel-tempe-kemanggi";
        document.getElementById("profilsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih4V == "5") {
        pilihan4 = "sop-bayam-bening";
        document.getElementById("profilsop-bayam-bening").style.display = "block";
      } else if (pilih4V == "6") {
        pilihan4 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("profilsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih4V == "7") {
        pilihan4 = "tempe-kukus";
        document.getElementById("profiltempe-kukus").style.display = "block";
      } else if (pilih4V == "8") {
        pilihan4 = "kentang-goreng";
        document.getElementById("profilkentang-goreng").style.display = "block";
      } else if (pilih4V == "9") {
        pilihan4 = "tempe-sambel-penyet";
        document.getElementById("profiltempe-sambel-penyet").style.display = "block";
      } else if (pilih4V == "10") {
        pilihan4 = "bayam-saus-kecap";
        document.getElementById("profilbayam-saus-kecap").style.display = "block";
      } else if (pilih4V == "11") {
        pilihan4 = "sambel-tempe-pedas";
        document.getElementById("profilsambel-tempe-pedas").style.display = "block";
      } else if (pilih4V == "12") {
        pilihan4 = "nugget-kentang";
        document.getElementById("profilnugget-kentang").style.display = "block";
      } else if (pilih4V == "13") {
        pilihan4 = "sandwich-bayam";
        document.getElementById("profilsandwich-bayam").style.display = "none";
      } else if (pilih4V == "14") {
        pilihan4 = "orak-arik-tempe";
        document.getElementById("profilorak-arik-tempe").style.display = "block";
      } else if (pilih4V == "15") {
        pilihan4 = "sop-bayam-tofu";
        document.getElementById("profilsop-bayam-tofu").style.display = "block";
      } else if (pilih4V == "16") {
        pilihan4 = "tempe-geprek";
        document.getElementById("profiltempe-geprek").style.display = "block";
      } else if (pilih4V == "17") {
        pilihan4 = "sambal-balado-kentang";
        document.getElementById("profilsambal-balado-kentang").style.display = "block";
      } else if (pilih4V == "18") {
        pilihan4 = "kripik-bayam";
        document.getElementById("profilkripik-bayam").style.display = "block";
      } else if (pilih4V == "19") {
        pilihan4 = "tempe-sambal-balado";
        document.getElementById("profiltempe-sambal-balado").style.display = "block";
      } else if (pilih4V == "20") {
        pilihan4 = "sambal-balado-kentang-pete";
        document.getElementById("profilsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih4V == "21") {
        pilihan4 = "biskuit-bayam";
        document.getElementById("profilbiskuit-bayam").style.display = "block";
      } else if (pilih4V == "22") {
        pilihan4 = "nugget-tempe-stik";
        document.getElementById("profilnugget-tempe-stik").style.display = "block";
      }
      var pilih5 = document.getElementById("pilih5");
      var pilih5V = pilih5.value;
      if (pilih5V == "1") {
        pilihan5 = "kripik-tempe";
        document.getElementById("profilkripik-tempe").style.display = "block";
      } else if (pilih5V == "2") {
        pilihan5 = "sop-bayam";
        document.getElementById("profilsop-bayam").style.display = "block";
      } else if (pilih5V == "3") {
        pilihan5 = "mashed-potatoes";
        document.getElementById("profilmashed-potatoes").style.display = "block";
      } else if (pilih5V == "4") {
        pilihan5 = "sambel-tempe-kemanggi";
        document.getElementById("profilsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih5V == "5") {
        pilihan5 = "sop-bayam-bening";
        document.getElementById("profilsop-bayam-bening").style.display = "block";
      } else if (pilih5V == "6") {
        pilihan5 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("profilsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih5V == "7") {
        pilihan5 = "tempe-kukus";
        document.getElementById("profiltempe-kukus").style.display = "block";
      } else if (pilih5V == "8") {
        pilihan5 = "kentang-goreng";
        document.getElementById("profilkentang-goreng").style.display = "block";
      } else if (pilih5V == "9") {
        pilihan5 = "tempe-sambel-penyet";
        document.getElementById("profiltempe-sambel-penyet").style.display = "block";
      } else if (pilih5V == "10") {
        pilihan5 = "bayam-saus-kecap";
        document.getElementById("profilbayam-saus-kecap").style.display = "block";
      } else if (pilih5V == "11") {
        pilihan5 = "sambel-tempe-pedas";
        document.getElementById("profilsambel-tempe-pedas").style.display = "block";
      } else if (pilih5V == "12") {
        pilihan5 = "nugget-kentang";
        document.getElementById("profilnugget-kentang").style.display = "block";
      } else if (pilih5V == "13") {
        pilihan5 = "sandwich-bayam";
        document.getElementById("profilsandwich-bayam").style.display = "none";
      } else if (pilih5V == "14") {
        pilihan5 = "orak-arik-tempe";
        document.getElementById("profilorak-arik-tempe").style.display = "block";
      } else if (pilih5V == "15") {
        pilihan5 = "sop-bayam-tofu";
        document.getElementById("profilsop-bayam-tofu").style.display = "block";
      } else if (pilih5V == "16") {
        pilihan5 = "tempe-geprek";
        document.getElementById("profiltempe-geprek").style.display = "block";
      } else if (pilih5V == "17") {
        pilihan5 = "sambal-balado-kentang";
        document.getElementById("profilsambal-balado-kentang").style.display = "block";
      } else if (pilih5V == "18") {
        pilihan5 = "kripik-bayam";
        document.getElementById("profilkripik-bayam").style.display = "block";
      } else if (pilih5V == "19") {
        pilihan5 = "tempe-sambal-balado";
        document.getElementById("profiltempe-sambal-balado").style.display = "block";
      } else if (pilih5V == "20") {
        pilihan5 = "sambal-balado-kentang-pete";
        document.getElementById("profilsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih5V == "21") {
        pilihan5 = "biskuit-bayam";
        document.getElementById("profilbiskuit-bayam").style.display = "block";
      } else if (pilih5V == "22") {
        pilihan5 = "nugget-tempe-stik";
        document.getElementById("profilnugget-tempe-stik").style.display = "block";
      }
      var pilih6 = document.getElementById("pilih6");
      var pilih6V = pilih6.value;
      if (pilih6V == "1") {
        pilihan6 = "kripik-tempe";
        document.getElementById("profilkripik-tempe").style.display = "block";
      } else if (pilih6V == "2") {
        pilihan6 = "sop-bayam";
        document.getElementById("profilsop-bayam").style.display = "block";
      } else if (pilih6V == "3") {
        pilihan6 = "mashed-potatoes";
        document.getElementById("profilmashed-potatoes").style.display = "block";
      } else if (pilih6V == "4") {
        pilihan6 = "sambel-tempe-kemanggi";
        document.getElementById("profilsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih6V == "5") {
        pilihan6 = "sop-bayam-bening";
        document.getElementById("profilsop-bayam-bening").style.display = "block";
      } else if (pilih6V == "6") {
        pilihan6 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("profilsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih6V == "7") {
        pilihan6 = "tempe-kukus";
        document.getElementById("profiltempe-kukus").style.display = "block";
      } else if (pilih6V == "8") {
        pilihan6 = "kentang-goreng";
        document.getElementById("profilkentang-goreng").style.display = "block";
      } else if (pilih6V == "9") {
        pilihan6 = "tempe-sambel-penyet";
        document.getElementById("profiltempe-sambel-penyet").style.display = "block";
      } else if (pilih6V == "10") {
        pilihan6 = "bayam-saus-kecap";
        document.getElementById("profilbayam-saus-kecap").style.display = "block";
      } else if (pilih6V == "11") {
        pilihan6 = "sambel-tempe-pedas";
        document.getElementById("profilsambel-tempe-pedas").style.display = "block";
      } else if (pilih6V == "12") {
        pilihan6 = "nugget-kentang";
        document.getElementById("profilnugget-kentang").style.display = "block";
      } else if (pilih6V == "13") {
        pilihan6 = "sandwich-bayam";
        document.getElementById("profilsandwich-bayam").style.display = "none";
      } else if (pilih6V == "14") {
        pilihan6 = "orak-arik-tempe";
        document.getElementById("profilorak-arik-tempe").style.display = "block";
      } else if (pilih6V == "15") {
        pilihan6 = "sop-bayam-tofu";
        document.getElementById("profilsop-bayam-tofu").style.display = "block";
      } else if (pilih6V == "16") {
        pilihan6 = "tempe-geprek";
        document.getElementById("profiltempe-geprek").style.display = "block";
      } else if (pilih6V == "17") {
        pilihan6 = "sambal-balado-kentang";
        document.getElementById("profilsambal-balado-kentang").style.display = "block";
      } else if (pilih6V == "18") {
        pilihan6 = "kripik-bayam";
        document.getElementById("profilkripik-bayam").style.display = "block";
      } else if (pilih6V == "19") {
        pilihan6 = "tempe-sambal-balado";
        document.getElementById("profiltempe-sambal-balado").style.display = "block";
      } else if (pilih6V == "20") {
        pilihan6 = "sambal-balado-kentang-pete";
        document.getElementById("profilsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih6V == "21") {
        pilihan6 = "biskuit-bayam";
        document.getElementById("profilbiskuit-bayam").style.display = "block";
      } else if (pilih6V == "22") {
        pilihan6 = "nugget-tempe-stik";
        document.getElementById("profilnugget-tempe-stik").style.display = "block";
      }
      var pilih7 = document.getElementById("pilih7");
      var pilih7V = pilih7.value;
      if (pilih7V == "1") {
        pilihan7 = "kripik-tempe";
        document.getElementById("profilkripik-tempe").style.display = "block";
      } else if (pilih7V == "2") {
        pilihan7 = "sop-bayam";
        document.getElementById("profilsop-bayam").style.display = "block";
      } else if (pilih7V == "3") {
        pilihan7 = "mashed-potatoes";
        document.getElementById("profilmashed-potatoes").style.display = "block";
      } else if (pilih7V == "4") {
        pilihan7 = "sambel-tempe-kemanggi";
        document.getElementById("profilsambel-tempe-kemanggi").style.display = "block";
      } else if (pilih7V == "5") {
        pilihan7 = "sop-bayam-bening";
        document.getElementById("profilsop-bayam-bening").style.display = "block";
      } else if (pilih7V == "6") {
        pilihan7 = "sayur-bayam-jagung-kuah-santan";
        document.getElementById("profilsayur-bayam-jagung-kuah-santan").style.display = "block";
      } else if (pilih7V == "7") {
        pilihan7 = "tempe-kukus";
        document.getElementById("profiltempe-kukus").style.display = "block";
      } else if (pilih7V == "8") {
        pilihan7 = "kentang-goreng";
        document.getElementById("profilkentang-goreng").style.display = "block";
      } else if (pilih7V == "9") {
        pilihan7 = "tempe-sambel-penyet";
        document.getElementById("profiltempe-sambel-penyet").style.display = "block";
      } else if (pilih7V == "10") {
        pilihan7 = "bayam-saus-kecap";
        document.getElementById("profilbayam-saus-kecap").style.display = "block";
      } else if (pilih7V == "11") {
        pilihan7 = "sambel-tempe-pedas";
        document.getElementById("profilsambel-tempe-pedas").style.display = "block";
      } else if (pilih7V == "12") {
        pilihan7 = "nugget-kentang";
        document.getElementById("profilnugget-kentang").style.display = "block";
      } else if (pilih7V == "13") {
        pilihan7 = "sandwich-bayam";
        document.getElementById("profilsandwich-bayam").style.display = "none";
      } else if (pilih7V == "14") {
        pilihan7 = "orak-arik-tempe";
        document.getElementById("profilorak-arik-tempe").style.display = "block";
      } else if (pilih7V == "15") {
        pilihan7 = "sop-bayam-tofu";
        document.getElementById("profilsop-bayam-tofu").style.display = "block";
      } else if (pilih7V == "16") {
        pilihan7 = "tempe-geprek";
        document.getElementById("profiltempe-geprek").style.display = "block";
      } else if (pilih7V == "17") {
        pilihan7 = "sambal-balado-kentang";
        document.getElementById("profilsambal-balado-kentang").style.display = "block";
      } else if (pilih7V == "18") {
        pilihan7 = "kripik-bayam";
        document.getElementById("profilkripik-bayam").style.display = "block";
      } else if (pilih7V == "19") {
        pilihan7 = "tempe-sambal-balado";
        document.getElementById("profiltempe-sambal-balado").style.display = "block";
      } else if (pilih7V == "20") {
        pilihan7 = "sambal-balado-kentang-pete";
        document.getElementById("profilsambal-balado-kentang-pete").style.display = "block";
      } else if (pilih7V == "21") {
        pilihan7 = "biskuit-bayam";
        document.getElementById("profilbiskuit-bayam").style.display = "block";
      } else if (pilih7V == "22") {
        pilihan7 = "nugget-tempe-stik";
        document.getElementById("profilnugget-tempe-stik").style.display = "block";
      }
    }
  </script>

  <?php
      $pilihan1 = "Keripik Tempe Gurih";
      $pilihan2 = "Sop Bayam Segar";
      $pilihan3 = "Tempe Kukus Nikmat";
      $pilihan4 = "Sop Bayam Tofu";
      $pilihan5 = "Tempe Geprek Jahannam";
      $pilihan6 = "Kripik Bayam Renyah";
      $pilihan7 = "Biskuit Bayam Havernut";
      mysqli_query($conn, "INSERT INTO rencana (nama_makanan) VALUES ('$pilihan1')");
      mysqli_query($conn, "INSERT INTO rencana (nama_makanan) VALUES ('$pilihan2')");
      mysqli_query($conn, "INSERT INTO rencana (nama_makanan) VALUES ('$pilihan3')");
      mysqli_query($conn, "INSERT INTO rencana (nama_makanan) VALUES ('$pilihan4')");
      mysqli_query($conn, "INSERT INTO rencana (nama_makanan) VALUES ('$pilihan5')");
      mysqli_query($conn, "INSERT INTO rencana (nama_makanan) VALUES ('$pilihan6')");
      mysqli_query($conn, "INSERT INTO rencana (nama_makanan) VALUES ('$pilihan7')");
      ?>
  <!-- Akhir Simpan ke Database -->

  <!-- Hapus -->
  <script>
    function hapus() {
      document.getElementById("profil").style.display = "none";
      document.getElementById("profil-hapus").style.display = "block";
    }
  </script>
  <?php
      mysqli_query($conn, "DELETE * FROM rencana");
  ?>
  <!-- Akhir Hapus -->
</body>

</html>
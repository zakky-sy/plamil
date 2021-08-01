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
  <link rel="stylesheet" href="style/buat_style.css">
  <title>Plamil</title>
</head>

<body>
  <?php session_start(); ?>
  <!-- Navbar -->
  <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" role="button"><img src="img/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link menubar disabled" href="index.php" role="button" tabindex="-1"
            aria-hidden="true">Beranda</a>
          <a class="nav-link menubar active disabled" aria-current="page" href="rencanaku.php">Rencanaku</a>
          <a class="nav-link menubar disabled" href="#">Profil</a>
          <a class="nav-link menubar disabled" href="#">Tentang</a>
        </div>
        <div class="navbar-nav ms-auto">
          <a class="nav-link akun pe-0 disabled" id="hai" href="#">Hai, Azzarah</a>
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
    <div class="container">
      <div class="row justify-content-center" id="track3">
        <div class="col-lg-5">
          <img src="img/track3.png" alt="Track3" class="img-fluid">
        </div>
      </div>
      <div class="row justify-content-center" id="track41">
        <div class="col-lg-5">
          <img src="img/track4.png" alt="Track4" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Track -->

  <!-- Card Buat-->
  <section class="card-buat my-5" id="buat">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg">
          <div class="card">
            <h5 class="card-header">Rencanaku</h5>
            <div class="card-body">
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
                <div class="col-lg-3 align-self-center btncontrol text-center">
                  <a href="#" class="btn btn-outline-secondary ubah">Ubah</a>
                  <a href="simpan.php" class="btn btn-primary buat">Buat</a>
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
        <div class="col-lg-8">
          <div class="card">
            <h5 class="card-header">Rencanaku</h5>
            <div class="card-body">
              <p class="card-title fs-6"> <?php echo date("d-m-Y"); ?> -
                <?php $d=strtotime("+7 Days");echo date("d-m-Y", $d); ?> </p>
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
      <a class="navbar-brand"><img src="img/logo.png" alt="Logo"></a>
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

  <script>
    $(document).ready(function () {
      $.get("rencanaku.php", function (data) {
        var data = $('<div>', {
          html: data
        });
        var pilih1 = data.find('#pilih1');
        var pilih1V = pilih1.value;
        if (pilih1V == "1") {
          var pilihan1 = "kripik-tempe";
        }
        document.getElementById(pilihan1).style.display = 'block';
      });
    });
  </script>
</body>

</html>
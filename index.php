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
  <link rel="stylesheet" href="style/style.css">
  <title>Plamil</title>
</head>

<body>
  <!-- Koneksi Database -->
  <?php
  include 'db_connection.php';
  $sql = "SELECT EXISTS (SELECT * FROM user)";
  $login = 'red';
  if(mysqli_query($conn, $sql)){
    $login = "blue";
  } else{
    $login = "red";
  }
  if ($login == "blue") : ?>
    <style type="text/css">
      #daftar,
      #masuk {
        display: none;
      }
    </style>
  <?php else : ?>
    <style type="text/css">
      #hai,
      #haicon {
        display: none;
      }
    </style>
  <?php endif;?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-body">
        <div class="container-fluid">
          <div class="modal-content">
            <div class="row justify-content-center">
              <div class="col-md text-center">
                <h5 class="modal-title fs-3 lh-1" id="myModalLabel">Hai,<br><span class="modal-title fs-3">Selamat
                    datang di
                    Plamil</span></h5>
                <p class="lead fs-6">“Tempatmu membuat menu makanan<br> untuk 1 minggu ke depan”</p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-4 text-center btndaftar">
                <a href="daftar.php" class="btn btn-primary daftar" role="button">Daftar</a>
              </div>
              <div class="col-lg-4 text-center">
                <a href="masuk.php" class="btn btn-outline-secondary masuk" role="button">Masuk</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Modal -->

  <!-- Navbar -->
  <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link menubar active" aria-current="page" href="#">Beranda</a>
          <a class="nav-link menubar" href="rencanaku.php">Rencanaku</a>
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
          <a href="#" class="btn btn-primary daftar" id="daftar" role="button">Daftar</a>
          <a href="#" class="btn btn-outline-secondary masuk" id="masuk">Masuk</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron" id="jumbotron">
    <div class="container-fluid">
      <h1 class="display-4"><span>Planner</span> makanan<br> untuk <span>1 minggu</span><br> ke depan !</h1>
      <a href="rencanaku.php" class="btn btn-primary mt-2 mb-2" role="button">Buat</a>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Filter Pencarian-->
  <section class="filtercari py-5">
    <div class="container mb-5">
      <div class="row">
        <div class="col-md-auto text-center">
          <h5 class="fs-5">Sesuaikan menu makanan<br>dengan kebutuhan</h5>
          <hr>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 text-center">
          <div class="row">
            <div class="col-lg text-center filter1">
              <a href="rencanaku.php"><img src="img/harga.jpg" alt="Harga" class="img-fluid">
                <p class="lead fs-2">Harga</p>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg text-center filter1 f2">
              <a href="rencanaku.php"><img src="img/bahan.jpg" alt="Jenis Bahan" class="img-fluid">
                <p class="lead fs-2">Jenis Bahan</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center filter2">
          <a href="rencanaku.php"><img src="img/kebutuhan.jpg" alt="Kebutuhan" class="img-fluid">
            <p class="lead fs-2 pfilter2">Kebutuhan Khusus</p>
          </a>
        </div>
        <div class="col-lg-3 text-center filter3">
          <a href="rencanaku.php"><img src="img/alergi.jpg" alt="Alergi" class="img-fluid">
            <p class="lead fs-2 pfilter3">Alergi</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Filter Pencarian -->

  <!-- Pemberitahuan -->
  <section class="pemberitahuan mt-5">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-10 pemberitahuanbox rounded-3">
          <div class="row my-3">
            <div class="col">
              <h5 class="fs-4">Dapatkan Pemberitahuan</h5>
              <p class="lead fs-6">perbarui rencana atau dapatkan info menarik lainnya melalui tautan e-mail
                <br>setiap hari jumat</p>
              <div class="langganan center-block">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="nama" aria-label="nama">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" placeholder="contoh.com" aria-label="contoh.com">
                </div>
                <a href="#" class="btn btn-primary" role="button">Langganan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Pemberitahuan -->

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
  <script>
    $(document).ready(function () {
      <?php if ($login == 'red') : ?>
        $("#myModal").modal('show');
      <?php endif; ?>
    });
  </script>
</body>

</html>
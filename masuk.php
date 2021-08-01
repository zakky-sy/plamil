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
  <link rel="stylesheet" href="style/login_style.css">
  <title>Plamil</title>
</head>

<body>
  <!-- Header -->
  <section class="header mt-2 mb-5">
    <div class="container text-center">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
      <p class="lead fs-6">2020. Oleh Mochammad Fachrizal Muzakky</p>
    </div>
  </section>
  <!-- Akhir Header -->

  <!-- Form -->
  <section class="pendaftaran">
    <div class="container text-center">
      <div class="row justify-content-center text-center">
        <div class="col-lg-5 form-daftar text-center">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control mx-auto" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control mx-auto" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary daftar">Masuk</button>
          </form>
        </div>
      </div>
      <div class="masuk">
        <p class="lead fs-6">Belum memiliki akun ? <a href="daftar.php">Daftar</a></p>
      </div>
    </div>
  </section>
  <!-- Akhir Form -->

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>
</body>

</html>
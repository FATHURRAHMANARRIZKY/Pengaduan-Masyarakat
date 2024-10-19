<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pengaduan Masyarakat - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    body {
  background: #16325B; /* Warna latar belakang biru tua gelap */
}

.card {
  border-radius: 15px;
  overflow: hidden;
  background-color: #1E3E62; /* Abu-abu terang untuk kontras pada form */
}

.card-header {
  background-color: #384B70; /* Warna header biru abu-abu gelap */
  color: white;
  text-align: center;
  padding: 20px;
  border-radius: 10px;
}

    .form-group {
      margin-top: 25px; /* Menambah ruang antara elemen form */
    }

    .form-control {
      background-color: #ECF0F1; /* Warna input field abu-abu terang */
      border: 2px solid #7F8C8D;
      border-radius: 5px;
      padding: 15px; /* Padding input field ditambah */
      color: #34495E;
    }

    .form-control:focus {
      border-color: #3498DB;
      box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    .btn-primary {
      background-color: #E74C3C; /* Warna tombol merah gelap */
      border: none;
      padding: 10px; /* Padding tombol */
    }

    .btn-primary:hover {
      background-color: #C0392B;
    }

    .btn-success {
      background-color: #3498DB; /* Warna tombol biru terang */
      border: none;
      padding: 10px; /* Padding tombol */
    }

    .btn-success:hover {
      background-color: #2980B9;
    }

    .card-body {
      padding: 30px; /* Menambah padding di dalam card-body */
    }
  </style>

</head>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-header">
            <h1 class="h4 text-white mb-0">Silahkan Masukkan Biodata Untuk Mendaftar Aplikasi Pengaduan Masyarakat</h1>
          </div>
          <div class="card-body">
            <form class="user" method="post" action="proses-register.php">
              <div class="form-group">
                <input name="nik" type="text" class="form-control form-control-user" placeholder="Masukan NIK Anda..." required>
              </div>
              <div class="form-group">
                <input name="nama" type="text" class="form-control form-control-user" placeholder="Masukan Nama Anda..." required>
              </div>
              <div class="form-group">
                <input name="username" type="text" class="form-control form-control-user" placeholder="Masukan Username Anda..." required>
              </div>
              <div class="form-group">
                <input name="password" type="password" class="form-control form-control-user" placeholder="Masukan Password" required>
              </div>
              <div class="form-group">
                <input name="telp" type="text" class="form-control form-control-user" placeholder="Masukan No Telp Anda..." required>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Register
              </button>
              <hr>
              <a href="index.php" class="btn btn-success btn-user btn-block">
                <i class="fa fa-laptop fa-fw"></i> Sudah Punya Akun? Silahkan Login
              </a>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="register.html">Create an Account!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pengaduan Masyarakat - Login</title>

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
  margin-top: 20px; /* Tambahkan ruang antara header dan input */
}

.btn-primary {
  background-color: #E74C3C; /* Warna tombol login merah gelap */
  border: none;
  color: white; /* Teks putih */
}

.btn-primary:hover {
  background-color: #C0392B; /* Warna merah gelap lebih intens saat hover */
}

.btn-success {
  background-color: #3498DB; /* Warna tombol biru terang */
  border: none;
  color: white; /* Teks putih */
}

.btn-success:hover {
  background-color: #2980B9; /* Biru lebih gelap saat hover */
}

.form-control {
  background-color: #ECF0F1; /* Warna input field abu-abu terang */
  border: 2px solid #7F8C8D; /* Border abu-abu gelap untuk input */
  border-radius: 5px; /* Membuat sudut sedikit melengkung */
  padding: 10px;
  color: #34495E; /* Warna teks dalam input lebih gelap */
}

.form-control:focus {
  border-color: #3498DB; /* Warna biru saat input difokuskan */
  box-shadow: 0 0 5px rgba(52, 152, 219, 0.5); /* Efek glow biru */
}

.form-control::placeholder {
  color: #7F8C8D; /* Placeholder abu-abu gelap */
}

  </style>

</head>

<body>

  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-xl-6 col-lg-6 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-header">
          <h1 class="h4 text-white mb-0">Selamat Datang Di Aplikasi Pengaduan</h1>
        </div>
        <div class="card-body p-5">
          <form class="user" method="post" action="proses-login.php">
            <div class="form-group">
              <input name="nik" type="text" class="form-control form-control-user border-1" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan NIK Anda..." required>
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control form-control-user border-1" id="exampleInputPassword" placeholder="Masukan Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Login
            </button>
            <hr>
            <a href="register.php" class="btn btn-success btn-user btn-block">
              <i class="fa fa-laptop fa-fw"></i> Belum Punya Akun? Silahkan Daftar
            </a>
            <a href="index2.php" class="btn btn-success btn-user btn-block">
              <i class="fa fa-laptop fa-fw"></i> Login Sebagai Admin / Petugas
            </a>
          </form>
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

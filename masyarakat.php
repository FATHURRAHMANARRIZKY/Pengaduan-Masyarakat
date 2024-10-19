<?php
session_start();
if(empty($_SESSION['nik'])){
  echo"<script>alert('Maaf Anda Belum Login'); window.location.assign('index.php'); </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pelaporan Pengaduan Masyarakat - Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="../css/custom-style.css" rel="stylesheet">


  <!-- Custom CSS for enhanced style -->
  <style>
    /* Tambahkan CSS untuk styling halaman */
    body {
      background-color: #f4f6f9;
    }

    .navbar-nav {
      background: linear-gradient(180deg, #2c3e50, #34495e);
    }

    .navbar-nav .nav-item .nav-link {
      color: white;
      font-weight: bold;
    }

    .navbar-nav .nav-item .nav-link:hover {
      background-color: #2980b9;
      color: white;
    }

    .topbar {
      background-color: #ecf0f1;
    }

    .topbar h1 {
      color: #2c3e50;
      font-weight: 700;
    }

    .sidebar-heading {
      color: #bdc3c7;
      font-weight: bold;
    }

    .nav-item.active .nav-link {
      background-color: #2980b9;
      color: white;
    }

    .content-wrapper {
      padding: 30px;
      background-color: #ffffff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    footer.sticky-footer {
      background-color: #ecf0f1;
      padding: 10px;
    }

    footer.sticky-footer .copyright {
      color: #7f8c8d;
    }

    /* Custom button style */
    .btn-primary {
      background-color: #3498db;
      border-color: #2980b9;
    }

    .btn-primary:hover {
      background-color: #2980b9;
      border-color: #1d6e9b;
    }

    /* Scroll to top button style */
    .scroll-to-top {
      background-color: #3498db;
    }

    .scroll-to-top:hover {
      background-color: #2980b9;
    }

    /* Modal overlay */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
    }

    /* Modal content */
    .modal-content {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
      width: 400px;
      text-align: center;
    }

    .modal-content h2 {
      color: #2c3e50;
      font-size: 1.5rem;
      margin-bottom: 20px;
    }

    .modal-content p {
      color: #7f8c8d;
      font-size: 1rem;
    }

    .modal-buttons {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
    }

    .modal-buttons button {
      padding: 10px 20px;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .modal-buttons .btn-cancel {
      background-color: #bdc3c7;
      color: white;
    }

    .modal-buttons .btn-confirm {
      background-color: #e74c3c;
      color: white;
    }

    .modal-buttons .btn-cancel:hover {
      background-color: #95a5a6;
    }

    .modal-buttons .btn-confirm:hover {
      background-color: #c0392b;
    }

    /* Display the modal when active */
    .modal-overlay.active {
      display: flex;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="masyarakat.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-th-large"></i>
        </div>
        <div class="sidebar-brand-text mx-3">APPM</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Masyarakat
      </div>

      <li class="nav-item">
        <a class="nav-link" href="masyarakat.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="?url=tulis-pengaduan">
          <i class="fas fa-fw fa-edit"></i>
          <span>Tulis Laporan</span>
        </a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="?url=lihat-pengaduan">
          <i class="fas fa-fw fa-search"></i>
          <span>Lihat Laporan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" onclick="openLogoutModal(event)">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <h1>Aplikasi Pelaporan Pengaduan Masyarakat</h1>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-gray-800"><?php include 'halaman.php'; ?></h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Aplikasi Pelaporan Pengaduan Masyarakat &copy2024</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Modal for Logout Confirmation -->
  <div class="modal-overlay" id="logoutModal">
    <div class="modal-content">
      <h2>Konfirmasi Logout</h2>
      <p>Apakah Anda yakin ingin keluar?</p>
      <div class="modal-buttons">
        <button class="btn-cancel" onclick="closeLogoutModal()">Batal</button>
        <button class="btn-confirm" onclick="confirmLogout()">Logout</button>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <!-- JavaScript for Logout Confirmation -->
  <script>
    // Open the modal when logout is clicked
    function openLogoutModal(event) {
      event.preventDefault(); // Prevent default action
      document.getElementById('logoutModal').classList.add('active');
    }

    // Close the modal
    function closeLogoutModal() {
      document.getElementById('logoutModal').classList.remove('active');
    }

    // Confirm logout
    function confirmLogout() {
      window.location.href = 'logout.php'; // Redirect to logout page
    }
  </script>

</body>

</html>

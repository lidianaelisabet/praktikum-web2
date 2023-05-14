<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>detail_produk</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>

<body class="hold-transition ">
  <!-- Site wrapper -->
  <div class="wrapper">





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <img src="img/logo lyshoes.png" alt="" width="80px">
        <h1 class="m-0">Shoes</h1>
      </a>
      <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          <a href="index.php" class="nav-item nav-link active">Beranda</a>
          <a href="dasboard.php" class="nav-item nav-link">Admin</a>
          <a href="pesan.php" class="nav-item nav-link">Pesanan</a>
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
          <div class=<li><a></li></a>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1"></div>
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->


    <!-- Content Wrapper. Contains page content -->
    <div class="">
      <!-- Main content -->
      <section class="content">

        <div class="container-fluid">
          <div id="layoutSidenav_content">
            <main>
              <div class="container-fluid px-4">
                <div>
                  <div>
                    <div class="jumbotron jumbotron-fluid" style="background-color:bg-info; height: 100px; padding: 10px; margin: 2px;">
                      <h1 class="mt-4 text-black">View Produk</h1>
                    </div>
                  </div>
                  <?php
                  $id = $_GET['id'];
                  $sql = "SELECT * FROM produk WHERE id=?";
                  $st = $dbh->prepare($sql);
                  $st->execute([$id]);
                  $row = $st->fetch();
                  ?>
                  <table class="table table-bg warning table-striped">
                    <tbody>
                      <tr>
                        <td>Nama</td>
                        <td><?= $row['nama'] ?></td>
                      </tr>
                      <tr>
                        <td>Stok</td>
                        <td><?= $row['stok'] ?></td>
                      </tr>
                      <tr>
                        <td>Harga</td>
                        <td><?= "Rp " . number_format($row['harga'], 2, ',', '.'); ?></td>
                      </tr>
                      <tr>
                        <td>Gambar</td>
                        <td><?= $row['gambar'] ?></td>
                      </tr>
                      <tr>
                        <td>Deskripsi</td>
                        <td><?= $row['deskripsi'] ?></td>
                      </tr>
                      <tr>
                        <td>Kategori_produk_id</td>
                        <td><?= $row['kategori_produk_id'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </main>
          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer Start -->
    <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #5f615f!important;">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Kantor Kami</h5>
            <p class="mb-2"><i class="fa fa-map-marker me-3"></i>Depok, Cimanggis Kelapa Dua</p>
            <p class="mb-2"><i class="fa fa-phone me-3"></i>082161035623</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>lidianaelisabet4@gmail.com</p>
            <div class="d-flex pt-3">
              <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.instagram.com/lydy4n4_/?hl=id"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://studio.youtube.com/channel/UCwUsUhHZjLvSzBbvP_HOZsw"><i class="fab fa-youtube"></i></a>
              <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.linkedin.com/in/lidiana-elisabet-880222256/"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Tautan langsung</h5>
            <a class="btn btn-link" href="index.php">Beranda</a>
            <a class="btn btn-link" href="pesan.php">Pemesanan</a>
            <a class="btn btn-link" href="dasboard.php">Admin</a>
            <a class="btn btn-link" href="detail_produk.php">Admin</a>

          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-white mb-4">Jam Kerja</h5>
            <p class="mb-1">Senin - Jum'at</p>
            <h6 class="text-light">09:00 am - 07:00 pm</h6>
            <p class="mb-1">Sabtu</p>
            <h6 class="text-light">09:00 am - 12:00 pm</h6>
            <p class="mb-1">Minggu</p>
            <h6 class="text-light">Closed</h6>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="fw-semi-bold" href="#">lidianaelisabet</a>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>
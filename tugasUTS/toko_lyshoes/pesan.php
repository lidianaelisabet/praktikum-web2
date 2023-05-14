<?php
require_once 'dbkoneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>pesan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-color: #DEB887 ;">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-primary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>082161035623</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


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
                <a href="index.php" class="nav-item nav-link">Beranda</a>
                <a href="dasboard.php" class="nav-item nav-link">Admin</a>
                <a href="pesan.php" class="nav-item nav-link">Pesanan</a>
                <div class="border-start ps-4 d-none d-lg-block">
                    <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                </div>
            </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->

    <!-- Page Header End -->


    <!-- Contact Start -->
    <section>
        <div class="container">
            <h1 class="text-center">Form Pemesanan</h1>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

            <form action="proses_pesanan.php" method="POST">
                <div class="form-group row">
                    <label for="nama_pemesan" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama_pemesan" name="nama_pemesan" placeholder="Masukan Nama" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea id="alamat_pemesan" name="alamat_pemesan" cols="40" rows="5" class="form-control" required="required"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                    <div class="col-8">
                        <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="produk_id" class="col-4 col-form-label">Produk</label>
                    <div class="col-8">
                        <?php
                        $sqljenis = "SELECT * FROM produk";
                        $rsjenis = $dbh->query($sqljenis);
                        ?>
                        <select id="produk_id" name="produk_id" class="custom-select">
                            <?php
                            if (isset($_GET["idedit"])) {
                                $id_jenis = $row["produk_id"];
                                $query2 = "SELECT * FROM produk WHERE id = '$id_jenis'";
                                $sql2 = $dbh->query($query2);
                                $row2 = $sql2->fetch();
                                echo '<option value="' . $row2['id'] . '">' . $row2['nama'] . '</option>';
                            }
                            foreach ($rsjenis as $rowjenis) {
                            ?>
                                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-8">
                        <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary" value="Simpan">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

<!-- Contact End -->


<!-- Footer Start -->
<div class="container-fluid  footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #5f615f    !important;">
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
<div class="bg-drak blue  py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-semi-bold" href="#">Lidiana Elisabet</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/parallax/parallax.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
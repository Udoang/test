<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Admin Template</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="js/all.js"></script>
</head>

<body>

    <script src="js/all.js"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/simple-datatables.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>

    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Awal Header-->
            <a class="navbar-brand ps-3" href="index.html">Aplikasi Data Mahasiswa</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>
            <!-- Navbar -->
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">profile</a></li>
                            <li><a class="dropdown-item" href="#!">Logout</a></li>
                        </ul>
                </li>
            </ul>
            <!-- Akhiri header -->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!--Awal Menu Slider-->
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu Utama</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="siswa.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Siswa
                            </a>
                </nav>
                <?php
                if (!isset($_GET['page'])) {
                    echo "Selamat, anda berhasil login sebagai " . $_SESSION['username'] . "!";
                    echo "<br>";
                    echo "<a href=logout.php>Logout</a>";
                } elseif ($_GET['page'] == 'siswa') {
                    include "siswa.php";
                } else {
                    echo "Maaf, halaman tidak ditemukan! ";
                }
                ?>
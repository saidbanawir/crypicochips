<?php
session_start();
include 'config.php';
if($_SESSION['status']!='login'){
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CRYPICOCHIPS - ADMIN</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">CRYPICOCHIPS</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a>Hi, <?php echo $_SESSION['nama_admin']; ?></a>
            <!-- Navbar-->
            </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href=".">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                                
                            <a class="nav-link" href="?page=barang">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Barang
                            </a>
                            <a class="nav-link" href="?page=toko">
                                <div class="sb-nav-link-icon"><i class="fas fa-store-alt"></i></div>
                                Toko
                            </a>
                            <a class="nav-link" href="?page=transaksi">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Transaksi
                            </a>
                            <a class="nav-link" href="?page=user">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                User
                            </a>
                            <a href="logout.php" class="nav-link">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid" id="isi">
                        <ol class="breadcrumb mt-4">
                        <?php 
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                        
                                switch ($page) {
                                    case 'home':
                                        include "home.php";
                                        break;
                                    case 'barang':
                                        include "barang.php";
                                        break;
                                    case 'transaksi':
                                        include "transaksi.php";
                                        break;	
                                    case 'toko';
                                        include "toko.php";
                                        break;
                                    case 'user';
                                        include "user.php";
                                        break;
                                    default:
                                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                        break;
                                }
                            }else{
                                include "home.php";
                            }
                        
                        ?>
                        </ol>
                </footer>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
		
</html>

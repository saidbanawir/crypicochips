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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CRYPICOCHIPS - SHOP</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">CRYPICOCHIPS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href=".">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=keranjang">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=setting">Setting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
  <?php 
        if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
        case 'home':
          include "home.php";
          break;
        case 'keranjang':
          include "keranjang.php";
          break;
        case 'setting':
          include "setting.php";
          break;	
          echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
          break;
         }
        }else{
        include "home.php";
          }
                        
    ?>
    </div>
  <!-- /.container -->

  <!-- Footer 
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; CRYPICOCHIPS 2020</p>
    </div>
    /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</body>

</html>

<?php
require("init.php");
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> pasaba | physics </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="physics">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="commNav">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php#page-top">home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php#about">about</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#portfolio">portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#news">news</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->

    <header class="commonhead">
    </header>

    <!-- Section -->

    <section id="phys-content" class="phys-section">
      <div class="container px-4 px-lg-5">
       <div class="row gx-4 gx-lg-5 justify-content-center">
         <div class="col-lg-0" style="margin:10px">
	   <h2> Parallel projects </h2><br>
	   <p style="color:gray"> This page collects some current and past projects over several different fields. The projects are usually related to software/web-page development, machine learning applications and data analysis. <br><br>
	   Below, the projects are categorized by topic and a little introduction is given. Check them out!</p>
	 </div>


	 <br>
	 <?php include  ("articles/women_football.html"); ?>
	 <br>
	 
   	 <br>
	 <?php include  ("articles/epidemy.html"); ?>
	 <br>
	
   	 <br>
	 <?php include  ("articles/brainsnake.html"); ?>
	 <br>
	   
	 <div class="row gx-4 gx-lg-5 justify-content-center" style="margin:20px"> <!-- here the card go -->	      </div>
       </div>
      </div>
    </section>


    <!-- Contact -->
    
    <section class="contact-section bg-black" id="contact">
      <div class="container px-4 px-lg-5">
	
	<div class="row gx-4 gx-lg-5 justify-content-center">
          
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4 mx-auto" />
                <div class="small text-black-50"><a href="#!">paolosbtn@gmail.com</a></div>
              </div>
            </div>
          </div>
 	  <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-phone text-primary mb-2"></i>
          	<h4 class="text-uppercase m-0">Mobile</h4>
          	<hr class="my-4 mx-auto" />
          	<div class="small text-black-50"><a href="#!">+39 3385968853</a></div>
              </div>
            </div>
          </div>

        </div>
	
        <div class="social d-flex justify-content-center">
          <a class="mx-2" href="https://twitter.com/carpiccia"><i class="fab fa-twitter"></i></a>
          <a class="mx-2" href="https://www.linkedin.com/in/paolo-sabatini-190043192/"><i class="fa-brands fa-linkedin-in"></i></a>
          <a class="mx-2" href="https://github.com/paolosabatini"><i class="fab fa-github"></i></a>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; P. Sabatini 2022</div></footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

</html>

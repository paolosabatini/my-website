<?php
require ("../../init.php");
?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> pasaba | post-mortem </title>
        <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script type="text/javascript" src="../../js/scripts.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
    </head>

    <!-- Header -->

    <header>
     <div class="container px-4 px-lg-5">
       <div class="row gx-4 gx-lg-5 justify-content-center">
         <div class="col-lg-0" style="margin:20px">
	   <p> Hello ATLAS world! </p>
	 </div>
       </div>	 
     </div>
    </header>


    <!-- Section -->

    <section id="blog-content" class="blog-section">
     <div class="container px-4 px-lg-5">
       <div class="row gx-4 gx-lg-5 justify-content-center">
         <div class="col-lg-0" style="margin:10px">
	   <h2> Post-mortem of a post-doc </h2>
	   <br>
	   <p align="left" style="color:gray">
	     Ciao! Here you can find some pages that can collect some info regarding some of the activities in ATLAS <br> This info are restricted, technical & boring.
	   </p>
             <?php
	       class Article {
	         public $title; public $date; public $link;
		 public function  __construct($title, $date, $link) {
		    $this->title = $title;
		    $this->date = $date;
		    $this->link = $link;
		 }
	       }
	       
	       $articles = array();
	       $articles[] = new Article ("Monotop searches", "last update: 24/01/2023", "monotop.html");
      	       $articles[] = new Article ("ID alignment", "last update: 01/02/2023", "idali.html");
       	       $articles[] = new Article ("CalRatio searches", "last update: 01/02/2023", "calratio.html");

	       
	       foreach ($articles as $article) {
	     ?>
	     

	    
             <div class="row">
	      <div class="card mb-4 bg-light" >
	       <div class="col-md-10"  style="margin-left:10px">
	         <div class="card-body" style="margin-top:10px;margin-bottom:10px">
		   <?php
		     echo '<h5 class="card-title"> <a href="post-mortem-content.php?article=' . $article->link . '">' . $article->title . ' </a> </h5>';
		     echo '<p class="card-text"><small class="text-muted">' . $article->date . '</small></p>';
		   ?>
		 </div>
	      </div>
             </div>	
	    </div>
	    
	     <?php
	     }
	     ?>


	 </div>
	 <div class="row gx-4 gx-lg-5 justify-content-center" style="margin:20px"> <!-- here the card go -->
	   

	 </div>
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
    <script src="../../js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>

</html>


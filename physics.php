<?php
require ("init.php");
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
	<!-- jQuery -->
	<script type="text/javascript" src="js/scripts.js"></script>
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
            <li class="nav-item"><a class="nav-link" href="index.php##about">about</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php##projects">projects</a></li>
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
	   <h2> My favourite physics </h2>
	   <p> A collection of paper summaries I partecipated to or I liked the most. Enjoy!  </p>
	   <p style="color:orange"> Page still under construction.. </p> 
	 </div>
	 <div class="row gx-4 gx-lg-5 justify-content-center" style="margin:20px"> <!-- here the card go -->


	   <!-- Four top Measurement-->
           <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
             <div class="col-lg-6"><img class="img-fluid" src="img/physics/4tops/fig_12.png" alt="..." style="background-size: cover;height: 100%;width: 100%;"/></div>
             <div class="col-lg-6">
               <div class="bg-black text-center h-100 project">
                 <div class="d-flex h-100">
                   <div class="project-text w-100 my-auto text-center text-lg-left" style="padding:5%">
                     <h4 class="text-white"> Search of four top quark production </h4>
                     <p class="mb-0 text-white-50"> The analysis of my PhD thesis, exploring an extreme phase space looking for an ultra-rare process. It ended up with its first statistical evidence, a highlight in top-quark physics of 2020.
		       <br><br>
		       <a href="https://link.springer.com/article/10.1007/JHEP11(2021)118"> JHEP 11 (2021) 118 </a> <br>
		       <a href="https://link.springer.com/article/10.1140/epjc/s10052-020-08509-3"> EPJC 80 (2020) 1085  </a> 
		     </p>

		     <br>
		     <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal4tops" > more </button>
		     <?php include ("articles/4tops.html"); ?>		     

		     <hr class="d-none d-lg-block mb-0 ms-0" />
                   </div>
                 </div>
               </div>
             </div>
           </div>

	   
   	   <!-- 2CR -->
           <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
             <div class="col-lg-6"><img class="img-fluid" src="img/physics/2cr/figaux_08.png" alt="..." style="background-size: cover;height: 100%;width: 100%;"/></div>
             <div class="col-lg-6 order-lg-first">
               <div class="bg-black text-center h-100 project">
                 <div class="d-flex h-100">
                   <div class="project-text w-100 my-auto text-center text-lg-left" style="padding:5%">
                     <h4 class="text-white"> Search for events with displaced jets </h4>
                     <p class="mb-0 text-white-50"> No hints of new physics so far, right? <br> What if we are just not looking at it?<br> In this analysis, we look for unconventional - and very challenging - signatures in the detector.
		       <br><br>
		       <a href="https://link.springer.com/article/10.1007/JHEP06(2022)005"> JHEP 06 (2022) 005  </a> <br>
		     </p>
                     <hr class="d-none d-lg-block mb-0 ms-0" />
                   </div>
                 </div>
               </div>
             </div>
           </div>


	   
	   <!--  Monotop -->
           <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
             <div class="col-lg-6"><img class="img-fluid" src="img/physics/monotop/fig_09a.png" alt="..." style="background-size: cover;height: 100%;width: 100%;"/></div>
             <div class="col-lg-6">
               <div class="bg-black text-center h-100 project">
                 <div class="d-flex h-100">
                   <div class="project-text w-100 my-auto text-center text-lg-left" style="padding:5%">
                     <h4 class="text-white"> Search for a monotop </h4>
                     <p class="mb-0 text-white-50"> Would be very strange to see a tank being scattered out of the blue, right? <br> This is what we search for in this analysis: events where the heaviest particle - the top quark - recoils against nothing!
		       <br><br>
		       <a href="https://cds.cern.ch/record/2815281"> ATLAS-CONF-2022-036 (conf. note)  </a> 
		     </p>
                     <hr class="d-none d-lg-block mb-0 ms-0" />
                   </div>
                 </div>
               </div>
             </div>
           </div>


   	   <!-- alignment -->
           <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
             <div class="col-lg-6"><img class="img-fluid" src="img/physics/idali22/fig_11a.png" alt="..." style="background-size: cover;height: 100%;width: 100%;"/></div>
             <div class="col-lg-6 order-lg-first">
               <div class="bg-black text-center h-100 project">
                 <div class="d-flex h-100">
                   <div class="project-text w-100 my-auto text-center text-lg-left" style="padding:5%">
                     <h4 class="text-white"> Aligning the tracker at the highest precision </h4>
                     <p class="mb-0 text-white-50"> Good ATLAS, cool physics.. but how could you be so precise if you cannot even access your detector? <br> Here, we explain how we measure the position of the tracking system without going to the cavern up to the highest precision!</p>
		       <br><br>
		       <a href="https://link.springer.com/article/10.1140/epjc/s10052-020-08700-6"> EPJC 80 (2020) 1194  </a> <br>
      		       <a href="http://cds.cern.ch/record/2811212"> ATL-PHYS-PUB-2022-028  (pub. note) </a>
		     </p>
                     <hr class="d-none d-lg-block mb-0 ms-0" />
                   </div>
                 </div>
               </div>
             </div>
           </div>

	   
      	   <!-- monotop measurement --> <!--
  	   <div class="card">
	     <img class="card-img-top" src="img/physics/monotop/fig_09a.png" alt="...">
	     <div class="card-body">
	       <h5 class="card-title">Where is the mono-top?</h5>
	       <p class="card-text"> Searching anomalies in a single top recoiling against nothing.</p>
	       <a href="#" class="btn btn-primary" disabled> more </a>
	     </div>
	   </div>
	   -->

      	   <!-- alignment rel22 measurement --> <!--
  	   <div class="card">
	     <img class="card-img-top" src="img/physics/idali22/fig_09a.png" alt="...">
	     <div class="card-body">
	       <h5 class="card-title">Tracker alignment towards Run 3</h5>
	       <p class="card-text"> Novel techniques and results in preparation to July 2022</p>
	       <a href="#" class="btn btn-primary" disabled> more </a>
	     </div>
	   </div>
	   -->

	   

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


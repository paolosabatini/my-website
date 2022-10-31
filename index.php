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
        <title> pasaba | home </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">home</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
		        <li class="nav-item"><a class="nav-link" href="#news">news</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">contacts</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead"> 
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">pasaba.eu</h1>
	                <h2 class="text-white-50 mx-auto">physicist / data scientist</h2>	
        		<h2 class="text-white-50 mx-auto mt-2 mb-5">paolo sabatini</h2>
                        <a class="btn btn-primary" href="#about">about</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
	    <div class="container px-4 px-lg-5">
	        <div class="row gx-4 gx-lg-5 justify-content-center">
		   <div class="col">
  		     <ul class="text-white" style="text-align:left">
		        <li>  Born in '91 in a small village on Monte Amiata (Italy). </li>
			<li> I am an experimental particle physicist, expert in big data analysis in multiple programming languages. </li>
			<li> I have been involved in several particle physics analyses using cutting-edge techniques, including machine learning. </li>
			<li> In love with learning, I have fun analysing data in a wide range of fields, from economics to sport. </li>
		     </ul>
		   </div>
 		   <div class="col">
		      <br><h2 class="text-white"> CV </h2><br>
 		      <a href="docs/cv/CV_IT.pdf"> <img src="img/index/italy_flag.png" width="120" height="80" style="filter: grayscale(75%)"> </a>
       		      <a href="docs/cv/CV_EN.pdf"> <img src="img/index/uk_flag.png" width="120" height="80"  style="filter: grayscale(75%)"> </a>
      		      <a href="docs/cv/CV_FR.pdf"> <img src="img/index/france_flag.png" width="120" height="80"  style="filter: grayscale(75%)"> </a>

		   </div>
		</div>
		<br><br>

		<svg class="points-test" viewbox="0 0 600 130">
  		  <circle r="10" cy="105" cx="50" fill="white" />
		  <line x1="50" y1="120" x2="50" y2="85" stroke="white" stroke-width="2"/>

  		  <circle r="10" cy="65" cx="70" fill="white" />
		  <line x1="70" y1="45" x2="70" y2="85" stroke="white" stroke-width="2"/>

    		  <circle r="10" cy="75" cx="85" fill="white" />
		  <line x1="85" y1="95" x2="85" y2="55" stroke="white" stroke-width="2"/>

    		  <circle r="10" cy="65" cx="110" fill="white" />
		  <line x1="110" y1="45" x2="110" y2="85" stroke="white" stroke-width="2"/>

      		  <circle r="10" cy="85" cx="160" fill="white" />
		  <line x1="160" y1="65" x2="160" y2="100" stroke="white" stroke-width="2"/>

       		  <circle r="10" cy="65" cx="200" fill="white" />
		  <line x1="200" y1="45" x2="200" y2="85" stroke="white" stroke-width="2"/>

       		  <circle r="10" cy="65" cx="260" fill="white" />
		  <line x1="260" y1="45" x2="260" y2="85" stroke="white" stroke-width="2"/>

       		  <circle r="10" cy="65" cx="350" fill="white" />
		  <line x1="350" y1="45" x2="350" y2="85" stroke="white" stroke-width="2"/>

       		  <circle r="10" cy="45" cx="450" fill="white" />
		  <line x1="450" y1="25" x2="450" y2="65" stroke="white" stroke-width="2"/>

       		  <circle r="10" cy="35" cx="480" fill="white" />
		  <line x1="480" y1="55" x2="480" y2="15" stroke="white" stroke-width="2"/>

       		  <circle r="10" cy="60" cx="550" fill="white" />
		  <line x1="550" y1="40" x2="550" y2="80" stroke="white" stroke-width="2"/>

		   <path d="M 50 95 Q 350 40 580 35" stroke="white" fill="transparent" stroke-width="4" stroke-dasharray="5"/>
		</svg>
            </div> <br> <br>
        </section>
        <!-- Portfolio-->
        <section class="projects-section bg-light" id="portfolio">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                   <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="img/bubble-chamb.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <a href="physics.php"> <h4>High-energy particle physics</h4> </a>
                            <p class="text-black-50 mb-0">
			    <br>  Summaries with links of my professional work as <b> particle phycisist </b> within the ATLAS Experiment at CERN. <br><br> Click here to learn more about data analyses <b> new processes </b> in high-energy physics, search of <b> dark matter </b> and how to keep a massive detector <b> aligned at micro-meter precision level </b>. 
			    </p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
		    <div class="col-lg-6"><img class="img-fluid" src="img/data.jpg" alt="..." style="background-size: cover;height: 100%;width: 100%;"/></div>
		    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <a href="fun.php"> <h4 class="text-white"> Parallel projects </h4> </a> 
                                    <p class="mb-0 text-white-50"><br> Collection with repositories and docs of my past and ongoing parallel projects. <br><br> They concern of <b> software development </b>, <b> machine learning</b> studies and <b>data analyses</b> on several fields. </p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="img/mic.jpg" alt="..." style="background-size: cover;height: 100%;width: 100%;"/></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Outreach</h4><br>
                                    <p class="mb-0 text-white-50"> The long term project is to create some media content about my passions: <b>physics</b>, <b>science</b> and <b>data analysis</b>.<br><br>
				    EQN is a science outreach podcast exploring the humans behind revolutions in science. Stay tuned. 
				    
				    </p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

	<!-- News -->
	
	<section class="news-section" style="display:flex; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.005) 0%, rgba(0, 0, 0, 0.5) 50%, #000 100%)" id="news">
	  <div class="container px-4 px-lg-5">
        
	  <h2 class="text-black" style="padding:10px"> News </h2>

	  <!-- Card 1 -->
	  <div class="card mb-4 bg-light" >
	    <div class="row">

	      <div class="col-md-2">
	        <div align="center" class="spinner-grow m-5 text-primary" style="width: 3.5rem; height: 3.5rem;" role="status">	</div>
              </div>

	      <div class="col-md-10"  style="margin-left:0px">
	        <div class="card-body">
		<h5 class="card-title"> <a href="https://paolosabatini.github.io/fanta-voto-ai/"> Preliminary results on FantaAI </a> </h5>
		<p class="card-text"> Despite several models have been tested and tuned (GBDT and NN) on the available open-acces data, no satisfactory prediction is obtained. The cause has found to be the poor quality and statistics of available dataset. 
		<p class="card-text"><small class="text-muted">October 31st, 2022</small></p>
		</div>
	      </div>

	    </div>
	  </div>	
	<br>
	</div>
	</section>
	
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container px-4 px-lg-5">

	      
	      <div class="row gx-4 gx-lg-5 justify-content-center">
	      <h2 class="text-white" style="padding:10px" align="center"> Contacts </h2>                   
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



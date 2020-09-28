<?php

require_once "lib/EasyRdf.php";

// deklarasi prefix DBpedia yang diperlukan
EasyRdf_Namespace::set('dbo', 'http://dbpedia.org/ontology/'); // contoh dbo:MusicalArtist
EasyRdf_Namespace::set('foaf', 'http://xmlns.com/foaf/0.1/');

// set DBpedia sparql endpoint
$sparql = new EasyRdf_Sparql_Client('http://dbpedia.org/sparql');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Disney</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">Disney</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#service2">Film</a></li>
                        <li><a href="#social1">Single</a></li>
                        <li><a href="#portfolio">Disney Comic Characters</a></li>
                        <li><a href="#testimonials">Artist</a></li>
                        <li><a href="#service">Star Wars</a></li>
                        <li><a href="#social">Tv Shows</a></li>
                        <li><a href="#service3">Park & Resort</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- about section -->
			<section id="about" style="background-color: rgba(0,0,0, 0.8);">
				<div class="container">
					<div class="row">
						<div class="col-md wow animated fadeInLeft">
							<div class="recent-works">
								<h3>ABOUT THE WALT DISNEY COMPANY</h3>
								<div id="works">
									<div class="work-item">
										<p>OUR MISSION<br> <br>The mission of The Walt Disney Company is to entertain, inform and inspire people around the globe through the power of unparalleled storytelling, reflecting the iconic brands, creative minds and innovative technologies that make ours the world’s premier entertainment company.</p>
									</div>
									<div class="work-item">
										<p>LEADERSHIP<br><br>Disney’s leadership team oversees the world’s premier entertainment company, home of the most respected and beloved brands around the globe.</p>
									</div>
									<div class="work-item">
										<p>OUR BUSINESSES<br><br>The Walt Disney Company, together with its subsidiaries and affiliates, is a leading diversified international family entertainment and media enterprise with the following business segments: Media Networks; Parks, Experiences and Products; Studio Entertainment; and Direct-to-Consumer and International.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
			
			<!-- Service section -->
<section id="service2">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Film</h2>
							<p class="wow animated bounceInRight">This is a list of films produced by and released under the Walt Disney Pictures banner</p>
						</div>
						
						<div class="col-md-8 col-sm-4 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon"><a href="Animation.php">
									<i class="fa fa-film fa-3x"></i></a>
								</div>
								<h3>Animation</h3>
							</div>
						</div>
					
						<div class="col-md-1 col-sm-8 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon"><a href="ori.php">
									<i class="fa fa-film fa-3x"></i></a>
								</div>
								<h3>Film</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end Service section -->
			<!-- Testimonial section -->
			<section id="social1" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown"><br><br>
								<h2>SINGLE</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="">
									<div class="clearfix">
										<span>This is a category for articles on music singles released by the Walt Disney Records label of the Disney Music Group.</span>
									</div>
									<a href="single.php" class="btn btn-black btn-effect">See Singles</a>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>DISNEY COMIC CHARACTERS</h2>
							<p>Disney comics are comic books and comic strips featuring characters created by the Walt Disney Company</p>
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/minnie.jpg" class="img-responsive" alt="Minnie Mouse is one of the funny animal cartoon characters created by Ub Iwerks and Walt Disney. She and Mickey Mouse were first drawn by Iwerks in 1928. The Mickey Mouse comic strip story 'The Gleam' (published January 19 – May 2, 1942) by Merrill De Maris and Floyd Gottfredson first gave her full name as Minerva Mouse, although this is seldom used.">
								<figcaption class="mask">
									<h3>Minnie Mouse</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Minnie Mouse" data-fancybox-group="works" href="img/portfolio/minnie.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/mickey.jpg" class="img-responsive" alt="Mickey Mouse is a cartoon character and the mascot of The Walt Disney Company. He was created by Walt Disney and Ub Iwerks at the Walt Disney Studios in 1928. An anthropomorphic mouse who typically wears red shorts, large yellow shoes, and white gloves, Mickey is one of the world's most recognizable characters. ">
								<figcaption class="mask">
									<h3>Mickey Mouse</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Mickey Mouse" href="img/portfolio/mickey.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/donald.png" class="img-responsive" alt="Scrooge McDuck is a fictional character created in 1947 by Carl Barks as a work-for-hire for The Walt Disney Company. Scrooge is an elderly Scottish anthropomorphic Pekin duck with a yellow-orange bill, legs, and feet. He typically wears a red or blue frock coat, top hat, pince-nez glasses, and spats. ">
								<figcaption class="mask">
									<h3>Scrooge McDuck</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Scrooge McDuck" data-fancybox-group="works" href="img/portfolio/donald.png"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/duck.jpg" class="img-responsive" alt="Donald Fauntleroy Duck is a cartoon character created in 1934 at Walt Disney Productions. Donald is an anthropomorphic white duck with a yellow-orange bill, legs, and feet. He typically wears a sailor shirt and cap with a bow tie. ">
								<figcaption class="mask">
									<h3>Donald Duck</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Donald Duck" data-fancybox-group="works" href="img/portfolio/duck.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/Daisy.jpg" class="img-responsive" alt="Daisy Duck is a cartoon character created in 1940 by Walt Disney Studios as the girlfriend of Donald Duck. Daisy is an anthropomorphic white duck, but has large eyelashes and ruffled tail feathers to suggest a skirt. She is often seen wearing a hair bow, blouse, and heeled shoes.">
								<figcaption class="mask">
									<h3>Daisy Duck</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Daisy Duck" data-fancybox-group="works" href="img/portfolio/daisy.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
							
							<li class="portfolio-item">
								<img src="img/portfolio/goffy.jpg" class="img-responsive" alt="Goofy is a funny animal cartoon character created in 1932 at Walt Disney Productions. Goofy is a tall, anthropomorphic dog who typically wears a turtle neck and vest, with pants, shoes, white gloves, and a tall hat originally designed as a rumpled fedora. Goofy is a close friend of Mickey Mouse and Donald Duck. ">
								<figcaption class="mask">
									<h3>Goofy</h3>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Goofy" data-fancybox-group="works" href="img/portfolio/goffy.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
							</li>
						</ul><br>
						<center><a href="comic.php" class="btn btn-navy btn-effect">See More</a></center><br>
					</div>
				</div>
			</section>
			<!-- end portfolio section -->
			<!-- end Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Artist</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="">
									<div class="clearfix">
										<span>This category is for people who were involved in acting or voicework for shows and movies that are or were on the Disney Channel.</span>
									</div>
									<a href="artist.php" class="btn btn-black btn-effect">See Artist</a>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Star Wars</h2>
							<p class="wow animated bounceInRight"> American epic space-opera media franchise created by <b>George Lucas</b></p>
						</div>
						
						<div class="col-md-8 col-sm-4 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon"><a href="sw_book.php">
									<i class="fa fa-book fa-3x"></i></a>
								</div>
								<h3>Book</h3>
							</div>
						</div>
					
						<div class="col-md-1 col-sm-8 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon"><a href="sw_film.php">
									<i class="fa fa-film fa-3x"></i></a>
								</div>
								<h3>Film</h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end Service section -->			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>TV SHOWS</h2>
								<p>Are you looking for your favorite disney shows on TV?</p>
								<p>Check it out!</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="tv.php"><i class="fa fa-play fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"></li>							
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			<section id="service3">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>PARK & RESORT</h2>
						</div>
						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<a href="hkresort.php"><center><img src="img/disney/hongkong.jpg" class="img-responsive"></center></a>
								<figcaption class="mask">
									<h3>Hongkong Disneyland Resort</h3>
								</figcaption>
							</li>

							<li class="portfolio-item">
								<a href="hongkong.php"><center><img src="img/disney/hongkong d.jpg" class="img-responsive"></center></a>
								<figcaption class="mask">
									<h3>Hongkong Disneyland</h3>
								</figcaption>
							</li>

							<li class="portfolio-item">
								<a href="orlando.php"><center><img src="img/disney/orlando.jpg" class="img-responsive"></center></a>
								<figcaption class="mask">
									<h3>Orlando Disneyland</h3>
								</figcaption>
							</li>

							<li class="portfolio-item">
								<a href="old.php"><center><img src="img/disney/Old.png" class="img-responsive"></center></a>
								<figcaption class="mask">
									<h3>Disney’s Old Key West Resort </h3>
								</figcaption>
							</li>

							<li class="portfolio-item">
								<a href="aulani.php"><center><img src="img/disney/aulani.jpg" class="img-responsive"></center></a>
								<figcaption class="mask">
									<h3>Aulani</h3>
								</figcaption>
							</li>

							<li class="portfolio-item">
								<a href="paris.php"><center><img src="img/disney/paris.jpg" class="img-responsive"></center></a>
								<figcaption class="mask">
									<h3>Paris Disneyland</h3>
								</figcaption>
							</li>
                        </ul>
					</div>
				</div>
			</section>		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
						</div>
						<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane fa-lg"></i>
								</button>
							</div>
						</form>
						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A"><i class="fa fa-youtube fa-3x"></i></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <!-- <script src="js/owl.carousel.min.js"></script> -->
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>

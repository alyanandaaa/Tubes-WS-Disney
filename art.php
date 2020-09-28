<?php

require_once "lib/EasyRdf.php";

// deklarasi prefix DBpedia yang diperlukan
EasyRdf_Namespace::set('dbo', 'http://dbpedia.org/ontology/'); // contoh dbo:MusicalArtist
EasyRdf_Namespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
// EasyRdf_Namespace::set('dbc', 'http://dbpeia.org/resource/Category:');
// EasyRdf_Namespace::set('dct', 'http://purl.org/dc/terms/');
// EasyRdf_Namespace::set('rdf', 'http://www.w3.org/2000/01/rdf-schema#');

// set DBpedia sparql endpoint
$sparql = new EasyRdf_Sparql_Client('http://dbpedia.org/sparql');
$artist = $_GET['nama'];
$result = $sparql->query(
   'SELECT distinct ?nama ?comment ?a ?g{'.
    ' dbr:'.$artist.' foaf:name ?nama;'.
    '                 rdfs:comment ?comment.'.
    ' dbr:'.$artist.' dbo:hometown ?asal.'.
    ' ?asal foaf:name ?a.'.
    ' dbr:'.$artist.' dbo:genre ?genre.'.
    ' ?genre foaf:name ?g.'.
    'FILTER(lang(?comment)="en").'.
    '}LIMIT 1'
  );

?>

<html>
<head>
  <title>PHP - SPARQL</title>
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
 <body style="background-color: pink;">
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
            <a href="index.php">Disney</a>
          </h1>
          <!-- /logo -->
                </div>

        <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#service">Film</a></li>
                        <li><a href="#portfolio">Disney Comic Characters</a></li>
                        <li><a href="#testimonials">Single</a></li>
                        <li><a href="#price">Artist</a></li>
                        <li><a href="#social">Tv Shows</a></li>
                        <li><a href="#service2">Star Wars</a></li>
                        <li><a href="#service3">Park & Resort</a></li>
                        <li><a href="#contact">Franchises</a></li>
                    </ul>
                </nav>
        <!-- /main nav -->
        
            </div>
        </header>
        <br>
        <br>
        <br>
        <br>
    <div class="container">
<h2><?php echo $artist ; ?></h2>

  <table class="table" cellpadding="7" border="1">
    <thead class="thead-dark">
    <tr align="center">
      <th colspan="2"><center>Description</center></th>
    </tr>
</thead>
<tbody>
    <?php
    
    $i=0;
    foreach ($result as $row)
     {
          echo 
        "<tr>
        <td> Comment </td>
        <td>" .$row->comment. "</td>
        </tr>
        <tr>
        <td> Hometown </td>
        <td>" .$row->a. "</td>
        </tr>
        <tr>
        <td> Recorded </td>
        <td>" .$row->g. "</td>
        </tr>
        <tr>";
    }
?>
</tbody>
</table>
</div>
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
        <script src="js/owl.carousel.min.js"></script>
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


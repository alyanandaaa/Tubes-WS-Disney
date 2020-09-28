<?php

require_once "lib/EasyRdf.php";

// deklarasi prefix DBpedia yang diperlukan
EasyRdf_Namespace::set('dbo', 'http://dbpedia.org/ontology/'); // contoh dbo:MusicalArtist
EasyRdf_Namespace::set('foaf', 'http://xmlns.com/foaf/0.1/');

// set DBpedia sparql endpoint
$sparql = new EasyRdf_Sparql_Client('http://dbpedia.org/sparql');
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
  <div class="container">
<h1><strong><br><br>Film of Star Wars</strong></h1>

<ul>
<?php

    $result = $sparql->query(
        'SELECT DISTINCT ?id ?Judul{'.
        '  ?id dct:subject dbc:Star_Wars_films.'.
    '  ?id foaf:name ?Judul.'.
    '} ORDER BY ASC (?Judul)'
    );
    ?>
    <table class="table" cellpadding="7" border="1">
    <thead class="thead-dark">
    <tr align="center">
      <th><center>No</center></th>
      <th><center>Name</center></th>
     <!--  <th>Publisher</th>
      <th>Genre</th>
      <th>Release Date</th> -->
    </tr>
</thead>

<tbody>
    <?php

    $i=0;
    foreach ($result as $row) {
          echo "<tr>
        <td>" .++$i. "</td>
        <td>" .$row->Judul. "</td>
      
        </tr>";
    echo "</p>";
    }
?>
</ul>
<div id="2">
<!-- <p>Jumlah Karakter: <?= $result->numRows() ?></p> -->
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


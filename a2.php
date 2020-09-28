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
$result = $sparql->query(
    'SELECT DISTINCT  ?abstrak ?tahun ?pro ?dir WHERE{
    OPTIONAL{
                ?id foaf:name ?judul;
                    dbo:abstract ?abstrak;
                    dbp:recorded ?tahun;
                    dbp:producer ?pro;
                    dbo:director ?direktur.
                ?direktur foaf:name ?dir
                    }   FILTER(lang(?abstrak)="en").
                        FILTER regex(?judul , "'.$_POST['film'].'", "i").
    } LIMIT 1'
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
    <div class="container">
<h2><?php echo $_POST['film'] ; ?></h2>

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
        <td> Abstract </td>
        <td>" .$row->abstrak. "</td>
        </tr>
        <tr>
        <td> Recorded </td>
        <td>" .$row->tahun. "</td>
        </tr>
        <tr>
        <td> Producer </td>
        <td>" .$row->pro. "</td>
        </tr>
        <tr>
        <td> Distributor </td>
        <td>" .$row->dir. "</td>
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

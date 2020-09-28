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
?>

<html>
<head>
  <title>PHP - SPARQL</title>
</head>
<body>
<h1>Contoh query SPARQL menggunakan PHP - EasyRDF</h1>
<h2>Disney Channel Movies</h2>
<select>
  <option value="all">--Choose Your Fav's Actor Or Actress--</option>
  <?php 
  $result = $sparql->query(
    'SELECT DISTINCT ?idg ?genre WHERE {'.
    ' ?id rdf:type dbo:MusicalArtist .'.
    ' ?id dbo:genre ?idg .'.
    ' ?idg foaf:name ?genre .'.
    '} LIMIT 50'
  );

  $i=0;
  foreach ($result as $row) {
    echo "<option value='" . $row->idg . "'>";
    echo $row->genre . "</option>";
  }
  ?>
</select>
<p>jumlah genre: <?= $result->numRows() ?></p>

</body>

</html>


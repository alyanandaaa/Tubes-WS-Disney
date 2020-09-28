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
</head>
<body>
<h1>Contoh query SPARQL menggunakan PHP - EasyRDF</h1>
<h2>Disney Channel Movies</h2>
<select>
  <option value="all">--Choose Your Fav's Actor Or Actress--</option>
  </select>
  
  <?php 
  $result = $sparql->query(
    'SELECT DISTINCT ?idg ?genre WHERE {'.
    ' ?id rdf:type dbo:MusicalArtist;'.
    ' dbo:genre ?idg.'.
    ' ?idg foaf:name ?genre.'.
    '} LIMIT 50'
  );

  // $i=0;
  // foreach ($result as $row) {
  //   ++$i;
  //   echo "<option value='". $row->idg."'>";
  //   echo $row->genre ."</option>";
  // }
  ?>
  <table class="table" cellpadding="7" border="1">
    <thead class="thead-dark">
    <tr align="center">
      <th>No</th>
      <th>Name</th>
      <th>Gender</th>
      <!-- <th>Birth Date</th>
      <th>Description</th> -->
    </tr>
</thead>

<tbody>
    <?php

    $i=0;
    foreach ($result as $row) {
          echo "<tr>
        <td>" .++$i. "</td>
        <td>" .$row->idg. "</td>
        <td>" .$row->genre. "</td>
        
        </tr>";
    echo "</p>";
    }
?>
</tbody>
</table>


<p>jumlah genre: <?= $result->numRows() ?></p>

</body>

</html>


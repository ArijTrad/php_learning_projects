<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp2 ex3</title>
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<?php
$tab = array("t1" => "ateliern2","t2" => "bonjour tout le monde","t3" => "vous etes les bienvenues"
);

$json=implode(" ",$tab);
echo $json."</br>";

$test=str_contains($json, "bonjour");
echo $test;

?>



</body>
</html>
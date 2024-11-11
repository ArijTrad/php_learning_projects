<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp2 ex2</title>
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>


<?php
$tabpays1 = array("Tunisie", "Maroc", "Russie", "Egypte", "Chine", "Brazil", "Colombia", "Costa Rica");

echo "<h3>1. Liste des Pays</h3>";
foreach ($tabpays1 as $pays) {
    echo " $pays </br>";
}
?>
</br>

<?php
sort($tabpays1);
echo "<h3>2. ordre croissant et decroissant</h3>";
foreach ($tabpays1 as $pays) {
    echo "$pays </br>";
}
?>

<?php
rsort($tabpays1);
echo "............................. </br>";
foreach ($tabpays1 as $pays) {
    echo "$pays </br>";
}
?>
</br>

<?php
echo "<h3>4. avec indice de capitale</h3>";

$tabpays2 = array("Tunis" => "Tunisie", "Rabat" => "Maroc", "Moscou" => "Russie", "Le Caire" => "Egypte", "Pékin" => "Chine", "Brasilia" => "Brésil", "Bogota" => "Colombie", "San José" => "Costa Rica");


foreach ($tabpays2 as $pays => $capitale) {
    echo "
    <table>
      <tr>
    <td>$pays</td>
    <th>$capitale</th>
      </tr>
      </table>
      ";
}
?>

<?php
echo "<h3>5. tabpays2 trie par ordre alphabetique croissant des indices</h3>";

ksort($tabpays2);
foreach ($tabpays2 as $pays => $capitale) {
    echo "
    <table>
      <tr>
    <td>$pays</td>
    <th>$capitale</th>
      </tr>
      </table>
      ";
}

?>

<?php


?>


</body>
</html>
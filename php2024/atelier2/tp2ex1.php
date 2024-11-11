<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp2 expm1</title>
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>



<h3>Tableau principal</h3>
<table class="tableau-de-notes">
<?php
echo"
  <tr>
    <th>nom</th>
    <th>moyenne</th>
  </tr>
";

$notes = ["Rami" => 7.50, "Mohamed" => 19.00, "Amira" => 15.50, "Asma" => 10.00, "Ahmed" => 9.5, "Yassine" => 15.5, "Islem" => 12.00];

foreach ($notes as $k => $v) {
echo"
  <tr>
    <td>$k</td>
    <td>$v</td>
  </tr>
" ;
 };
?>
</table>



<br>
<h3>1. Etudiants ayant moyenne >10</h3>
<table>
<?php
echo"
  <tr>
    <th>nom</th>
    <th>moyenne</th>
  </tr>
";

foreach ($notes as $k => $v) {
        if($v>=10){
      echo"
        <tr>
          <td>$k</td>
          <td>$v</td>
        </tr>
      " ;
          }
 };
?>
</table>


<br>

<?php
$nbre=0;
foreach ($notes as $key => $value) {
   $nbre=$nbre + 1;
 };
echo"<h3>2. nombre d'etudiants: $nbre</h3>";
?>


<table>
<?php
$note=10;
$nom="";
foreach ($notes as $key => $value) {
  if($value>$note){
    $nom=$key;
    $note=$value;
          }
 };
 echo"<h3>3. l'etudiant $nom a la bonne note $note </h3>" ;
?>
</table>




<h3>5. tableau de Notes croissant </h3>
<table>
<?php
asort($notes);
foreach ($notes as $key => $value) {
  
      echo"
        <tr>
          <td>$key</td>
          <td>$value</td>
        </tr>
      " ;
          }
?>
</table>


<h3>6. tableau noms decroissant </h3>
<table>
<?php
krsort($notes);
foreach ($notes as $key => $value) {
  
      echo"
        <tr>
          <td>$key</td>
          <td>$value</td>
        </tr>
      " ;
          }
?>
</table>


<table>
<?php
$moy= array_sum($notes)/$nbre;
echo"<h3>7. moyenne $moy </h3>"
?>
</table>





<style>
.tableau-de-notes{

background-color: pink;

}


</style>

</body>
</html>
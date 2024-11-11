<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp2 ex4</title>
  <link rel="stylesheet" href="bootstrap.css">
</head>
<body>


















-----------------------------------
<br>
<label for="chaine">entrer chaine :</label>
<input type="text" id="chaine" name="chaine" required><br><br>
<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Saisir une chaîne de caractères
    $chaine = $_POST['chaine'];

    // 2. Retourner sa longueur
    $longueur = strlen($chaine);

    // 3. Extraire une sous-chaîne
    $position = $_POST['position'];
    $longueurSousChaine = $_POST['longueurSousChaine'];
    $sousChaine = substr($chaine, $position, $longueurSousChaine);

    // 4. Inverser cette chaîne de caractères
    $chaineInverse = '';
    for ($i = strlen($chaine) - 1; $i >= 0; $i--) {
        $chaineInverse .= $chaine[$i]; // Ajout du caractère à la chaîne inversée
    }

    // Affichage des résultats
    echo "<h1>Résultats</h1>";
    echo "<p>Chaîne saisie: <strong>$chaine</strong></p>";
    echo "<p>Longueur de la chaîne: <strong>$longueur</strong></p>";
    echo "<p>Sous-chaîne extraite: <strong>$sousChaine</strong></p>";
    echo "<p>Chaîne inversée: <strong>$chaineInverse</strong></p>";
}
?>


    <h1>Entrez une chaîne de caractères</h1>
    <form method="post">


        <label for="position">Position de départ :</label>
        <input type="number" id="position" name="position" required><br><br>

        <label for="longueurSousChaine">Longueur de la sous-chaîne :</label>
        <input type="number" id="longueurSousChaine" name="longueurSousChaine" required><br><br>

        <input type="submit" value="Traiter">
    </form>





</body>
</html>
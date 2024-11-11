<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation d'adresse IPv4</title>

</head>
<body>
    <h1>Formulaire de vérification d'adresse IPv4</h1>
    <form method="post" action="tp3ex1.php">
        <input type="text" name="ipPart1" value="<?= $ipPart1 ?>" maxlength="3" required> .
        <input type="text" name="ipPart2" value="<?= $ipPart2 ?>" maxlength="3" required> .
        <input type="text" name="ipPart3" value="<?= $ipPart3 ?>" maxlength="3" required> .
        <input type="text" name="ipPart4" value="<?= $ipPart4 ?>" maxlength="3" required><br><br>

        <button type="submit" name="submit">Vérifier l'adresse IP</button>
    </form>


    <?php

function validateIpAddress($ip) {
  if ($ip ==192168522) {
    return true;
      }
   else {
    echo false;

  }
}

$ipPart1 = $ipPart2 = $ipPart3 = $ipPart4 = '';
$ip = '';
$message = '';

if (isset($_POST['submit'])) {
    // Get the values from the form and sanitize them
    $ipPart1 = htmlspecialchars(strip_tags($_POST['ipPart1']));
    $ipPart2 = htmlspecialchars(strip_tags($_POST['ipPart2']));
    $ipPart3 = htmlspecialchars(strip_tags($_POST['ipPart3']));
    $ipPart4 = htmlspecialchars(strip_tags($_POST['ipPart4']));

    // Combine the parts to form the complete IP address
    $ip = "$ipPart1.$ipPart2.$ipPart3.$ipPart4";

    // Call the valideIP function to validate the IP
    if (validateIpAddress($ip)) {
        echo 'valide';
    } else {
      echo 'NON valide';
    }
}
?>


</body>
</html>

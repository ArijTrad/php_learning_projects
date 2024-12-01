<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp3ex5 acceuil</title>
</head>
<body>


<h1>Cliquer sur l’un des boutons !</h1>
    
    <form method="post" action="">
        <input type="submit" name="vendre" value="vente">
        <input type="submit" name="acheter" value="achat">
        <input type="submit" name="louer" value="loyer">
    </form>

    <?php

    if (isset($_POST['vendre'])) {
        header("Location: tp3ex5v.php");
    }

    if (isset($_POST['acheter'])) {
        header("Location: tp3ex5a.php");
    }

    if (isset($_POST['louer'])) {
        header("Location: tp3ex5l.php");

    }
    ?>

</body>
</html>
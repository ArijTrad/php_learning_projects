<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



<form action="<?= $_server['php_self']?>" method="post">
<input type="text" name="login" placeholder="votre login"><br>
<input type="text" name="pw" placeholder="votre mdp" id=""><br>
<input type="submit" name="ok" value="se connecter"><br>
  

</form>



<?php
if (isset ($_POST["ok"]))
{
  $login=htmlspecialchars($_POST['login']);
  $pw=htmlspecialchars($_POST['pw']);

  if ($login=="user" && $pw=="user123"){
    header("location:home_user.php");
    exit;
  } 
  if ($login=="admin" && $pw=="admin123"){
    header("location:home_admin.php");
    exit;
  } 
  echo"<script>alert('login ou et mdp incorrect')</script>";

}



?>

</body>
</html>
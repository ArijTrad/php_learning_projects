<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mytest</title>
</head>
<body>





<form action="mytest.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" name="s">
</form>

<?php

$name = $email = "";


  if (isset($_POST['s'])) 
{ //Récupération des paramètres passés 
$email = $_POST['email']; 
$name = $_POST['name']; 
 //affichage des paramètres 
 echo "<h5>Form Submitted using isset:</h5>";
 echo "<p>Name: $name</p>";
 echo "<p>Email: $email</p>";

}





  // Check if the form was submitted
  if ($_SERVER['PHP_SELF'] == 'POST') {
      // Get the form data using the $_POST superglobal
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
  
      // Display the data
      echo "<h2>Form Submitted:</h2>";
      echo "<p>Name: $name</p>";
      echo "<p>Email: $email</p>";
  }




?>





  
</body>
</html>
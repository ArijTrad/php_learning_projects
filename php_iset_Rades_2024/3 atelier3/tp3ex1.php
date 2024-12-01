<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp3ex1</title>
</head>
<h1>inscription a la visite guidee</h1>
<body>
    <form action="tp3ex1.php" method="post">
         nom<input type="text" name="nom"><br><br>
         prenom<input type="text" name="pre"><br><br>
         age<input type="number" name="age" ><br><br>
         adresse mail<input type="email" name="mail"> <br><br>
        <input type="submit" value="inscription" name="insc"><br><br>
        <input type="submit" value="afficher" name="aff"><br><br>
    </form>

<form action="" type="text"></form>
<input type="checkbox">


    <?php
    //1 saisie du contenu
    if (isset($_POST['insc'])){
    $nom=htmlspecialchars(strip_tags($_POST['nom']));
    $prenom=htmlspecialchars(strip_tags($_POST['pre']));
    $age=htmlspecialchars(strip_tags($_POST['age']));
    $mail=htmlspecialchars(strip_tags($_POST['mail']));
    if (empty($nom) or empty($prenom) or empty($age) or empty($mail)) {
        echo "error il ya un champ vide";
    }else{
    echo"<script>alert(\"linscription pour:$nom $prenom a été prise en compte\")</script>"; 
      }
        }



//affichage tableau
        if (isset($_POST['aff'])) {

          echo "<table>";
          echo "<tr><th>Champ</th><th>Valeur</th></tr>";
        
            foreach ($_POST as $key => $value) {
                // Use htmlspecialchars for security when displaying
                echo "<tr>
                <td>" . htmlspecialchars($key) . "</td>
                <td>" . htmlspecialchars($value) . "</td>
                </tr>";
            }
            echo "</table>";




            
     // Display the $_POST array with var_dump() and print_r()


     echo "<h5>var_dump </h5>";

     var_dump($_POST);

     echo "<h5>print_r</h5>";
     print_r($_POST);
        
        
        }

    
?>










<style>
        table {
            border-collapse: collapse; /* Ensures there is only a single line border between cells */
            width: 50%;
            background-color: pink;
        }
        table, th, td {
            border: 1px solid black; /* 1px border for the table, table header, and table cells */
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</html>
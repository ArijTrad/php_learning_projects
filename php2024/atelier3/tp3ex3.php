<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3ex3</title>
</head>
<body>






    <?php
        $tmots=["ahmed"=>"1234","arij"=>"0000","nour"=>"2233"];
    ?>











    <form action="tp3ex3.php" method="post">

        <h3>choisir un nom pour afficher son mot de passe</h3>
        <select name="nom">
            <?php
                foreach ($tmots as $nom => $mdp) {
                    echo "<option value='$nom'>$nom</option>";
                }
            ?>
        </select>
        <input type="submit" name="nn" value="afficher le mot de passe">
       
    </form>
    <?php
     if(isset($_POST['nn'])){
        $nom=$_POST['nom'] ;
        $mdp=$tmots[$nom];
        echo "<p>$mdp</p>";
    }
    ?>




    <h3>choisir un mot de passe pour afficher son nom </h3>
    <form action="tp3ex3.php"method="post">
        <select name="pw" id="">
        <?php
        foreach ($tmots as $nom => $mdp) {
            echo "<option value='$mdp'>$mdp</option>";
        }
        ?>
        </select>
        <input type="submit" name="ok2" value="Afficher le nom">
    </form>
    <?php
    if(isset($_POST['ok2'])){
        $pw=$_POST['pw'];
        $nom=array_search($pw, $tmots);
        echo "<p> $nom</p>";
    }
    ?>
    
</body>
</html>
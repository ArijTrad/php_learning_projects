<?php
if (isset($_GET['prenom']) && isset($_GET['repetition'])){
    $prenom = $_GET['prenom'];
    $repetition=$_GET['repetition'];
    if (is_numeric($repetition)&& $repetition<10) {
        for ($i=0; $i <$repetition; $i++) { 
            echo "bienvenue $prenom </BR>";
        }

    }else {
        echo "Erreur: Le paramètre 'repetition' doit être un entier inférieur à 10.";
    }

}
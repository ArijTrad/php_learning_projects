<?php
class Appartement {
    public static function updateAppartement($reference, $proprietaire, $localite, 
                                               $surface, $domaine_usage, $nb_pieces, $espace_commun) {
        require_once 'config.php';

        $sql = "UPDATE appartement SET 
                proprietaire = :proprietaire, 
                localite = :localite, 
                surface = :surface, 
                domaine_usage = :domaine_usage, 
                nb_pieces = :nb_pieces, 
                espace_commun = :espace_commun 
                WHERE reference = :reference";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':reference' => $reference,
            ':proprietaire' => $proprietaire,
            ':localite' => $localite,
            ':surface' => $surface,
            ':domaine_usage' => $domaine_usage,
            ':nb_pieces' => $nb_pieces,
            ':espace_commun' => $espace_commun
        ]);
    }
}
?>

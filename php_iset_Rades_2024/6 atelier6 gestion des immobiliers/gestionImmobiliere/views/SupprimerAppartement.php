<?php
require_once 'config.php';

if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];

    $sql = "DELETE FROM appartement WHERE reference = :reference";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':reference' => $reference]);

    echo "Appartement supprimé avec succès!";
}
?>

<?php
include_once 'config.php';

class CRUDAppartement {
    private $conn;

    public function __construct() {
        $config = new Config();
        $this->conn = $config->conn;
    }

    public function AjouterApp($appartement) {
        $sql = "INSERT INTO Appartement (Référence, Propriétaire, Localité, Surface, NbPieces, DomaineUsage, SurfaceEspaceCommun) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $appartement->reference,
            $appartement->proprietaire,
            $appartement->localite,
            $appartement->surface,
            $appartement->nbPieces,
            $appartement->domaineUsage,
            $appartement->surfaceEspaceCommun,
        ]);
    }

    public function ListerApp() {
        $sql = "SELECT * FROM Appartement";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function SupprimerApp($ref) {
        $sql = "DELETE FROM Appartement WHERE Référence = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$ref]);
    }

    public function ModifierApp($appartement) {
        $sql = "UPDATE Appartement SET Propriétaire = ?, Localité = ?, Surface = ?, NbPieces = ?, DomaineUsage = ?, SurfaceEspaceCommun = ? 
                WHERE Référence = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $appartement->proprietaire,
            $appartement->localite,
            $appartement->surface,
            $appartement->nbPieces,
            $appartement->domaineUsage,
            $appartement->surfaceEspaceCommun,
            $appartement->reference,
        ]);
    }
}
?>

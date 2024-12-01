

<?php

abstract class Personne {
    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    abstract public function getInfo();
}

class Adulte extends Personne {
    private $metier;
    private $salaire;

    public function __construct($nom, $prenom, $metier, $salaire) {
        parent::__construct($nom, $prenom);
        $this->metier = $metier;
        $this->salaire = $salaire;
    }

    public function getInfo() {
        return "Nom: {$this->nom}, Prénom: {$this->prenom}, Métier: {$this->metier}, Salaire: {$this->salaire}";
    }
}

class Adolescent extends Personne {
    private $age;
    private $loisir;

    public function __construct($nom, $prenom, $age, $loisir) {
        parent::__construct($nom, $prenom);
        $this->age = $age;
        $this->loisir = $loisir;
    }

    public function getInfo() {
        return "Nom: {$this->nom}, Prénom: {$this->prenom}, Âge: {$this->age}, Loisir: {$this->loisir}";
    }
}

$adulte1 = new Adulte("Dupont", "Jean", "Ingénieur", 3500);
$adolescent1 = new Adolescent("Martin", "Julie", 16, "Natation");

echo "<h2>info adulte:</h2>";
echo "<p>" . $adulte1->getInfo() . "</p>";

echo "<h2>info adolesce nt  :</h2>";
echo "<p>" . $adolescent1->getInfo() . "</p>";

?>

<?php

class Salarie {
    protected $code;
    protected $nom;
    protected $prenom;
    protected $salaireBase;
    protected $indemnite;

    public function __construct($code, $nom, $prenom, $salaireBase, $indemnite) {
        $this->code = $code;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->salaireBase = $salaireBase;
        $this->indemnite = $indemnite;
    }

    public function calculSalaire() {
        return $this->salaireBase + $this->indemnite;
    }

    public function infosSalarie() {
        return "Code: {$this->code}, Nom: {$this->nom}, Prénom: {$this->prenom}, Salaire de base: {$this->salaireBase}, Indemnité: {$this->indemnite}";
    }
}


class Contractuel extends Salarie {
  private $dateContrat;
  private $typeContrat;

  public function __construct($code, $nom, $prenom, $salaireBase, $indemnite, $dateContrat, $typeContrat) {
      parent::__construct($code, $nom, $prenom, $salaireBase, $indemnite);
      $this->dateContrat = $dateContrat;
      $this->typeContrat = $typeContrat;
  }

  public function infosSalarie() {
      $baseInfo = parent::infosSalarie();
      return "{$baseInfo}, Date de contrat: {$this->dateContrat}, Type de contrat: {$this->typeContrat}";
  }
}




$contractuel = new Contractuel("001", "Dupont", "Jean", 3000, 500, "2023-01-01", "CDD");

echo "Salaire total: " . $contractuel->calculSalaire() . "<br>";

echo $contractuel->infosSalarie();








?>

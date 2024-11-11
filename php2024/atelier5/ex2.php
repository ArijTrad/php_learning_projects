<?php

class MiseEnForme {
  private $chaine;

  public function __construct($chaine) {
      $this->chaine = $chaine;
  }

  public function gras() {
      return "<b>texte en gras</b>";
  }

  public function italique() {
      return "<i>texte en italique</i>";
  }

  public function souligne() {
      return "<u>texte souligné</u>";
  }

  public function majuscules() {
      return strtoupper("texte en majuscule");
  }
}


$miseEnForme = new MiseEnForme("initial text");

echo "Gras : " . $miseEnForme->gras() . "<br>"; 
echo "Italique : " . $miseEnForme->italique() . "<br>"; 
echo "Souligne : " . $miseEnForme->souligne() . "<br>"; 
echo "Majuscules : " . $miseEnForme->majuscules() . "<br>"; 


?>

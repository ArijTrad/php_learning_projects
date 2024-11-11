<?php
class Ville {
    private $nom;
    private $gouvernorat;

    public function __construct($n, $g) {
        $this->nom = $n;
        $this->gouvernorat = $g;
    }

    public function get_info() {
        return "La ville {$this->nom} est dans le gouvernorat {$this->gouvernorat}.";
    }

    public function __toString() {
        return "La ville {$this->nom} est dans le gouvernorat {$this->gouvernorat}.";
    }
}

$ville1 = new Ville("Chebba", "Mahdia");
$ville2 = new Ville("Rades", "Ben Arous");

echo $ville1->get_info();
echo "<br>";
echo $ville2->get_info();

echo "<br><br>";
echo "<h1>avec to string magique</h1>";

echo $ville1;
echo "<br>";
echo $ville2;
?>

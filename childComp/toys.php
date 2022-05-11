<?php 
include __DIR__ . "/../fatherComp.php";

class Toy extends Product {
    public $type;

    public function __construct ($_description, $_price, $_cathegory, $_type) {
        parent::__construct ($_description, $_price, $_cathegory);
        $this -> setType ($_type);
    }

    public function setType($_type) {
        $this -> type = $_type;
        return $this;
    }

    public function getType () {
        return $this -> type;
    }

}

$frisbee = new Toy ("Geo Frisbee Tornado", 1.89, "Giocattolo per cani", "Frisbee");
echo "<div style='display:inline-block;'>";
echo "<p> Nome Prodotto: " . $frisbee -> getDescription() . "</p>";
echo "<p> Prezzo: " . $frisbee -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $frisbee -> getCathegory() . "</p>";
echo "<p> Tipo giocattolo: " . $frisbee -> getType() . "</p>";
echo "</div>";

$corda = new Toy ("Corda Dentale per Cani", 14.30, "Giocattolo per cani", "Corda da masticare");
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $corda -> getDescription() . "</p>";
echo "<p> Prezzo: " . $corda -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $corda -> getCathegory() . "</p>";
echo "<p> Tipo giocattolo: " . $corda -> getType() . "</p>";
echo "</div>";

$peluche = new Toy ("Peluche per cane", 9.95, "Giocattolo per cani", "Peluche morbido ");
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $peluche -> getDescription() . "</p>";
echo "<p> Prezzo: " . $peluche -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $peluche -> getCathegory() . "</p>";
echo "<p> Tipo giocattolo: " . $peluche -> getType() . "</p>";
echo "</div>";

?>
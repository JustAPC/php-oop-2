<?php 
include __DIR__ . "/../fatherComp.php";

class Food extends Product {
    public $taste;

    public function __construct ($_description, $_price, $_cathegory, $_taste) {
        parent::__construct ($_description, $_price, $_cathegory);
        $this -> setTaste ($_taste);
    }

    public function setTaste($_taste) {
        $this -> taste = $_taste;
        return $this;
    }

    public function getTaste () {
        return $this -> taste;
    }

}

$royalCanin = new Food ("Royal Canin V-Diet", 3.35, "Cibo per cani", "Salmone e Riso");
echo "<div style='display:inline-block;'>";
echo "<p> Nome Prodotto: " . $royalCanin -> getDescription() . "</p>";
echo "<p> Prezzo: " . $royalCanin -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $royalCanin -> getCathegory() . "</p>";
echo "<p> Gusto: " . $royalCanin -> getTaste() . "</p>";
echo "</div>";

$monge = new Food ("Monge All Breeds", 45.99, "Cibo per cani", "Pollo");
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $monge -> getDescription() . "</p>";
echo "<p> Prezzo: " . $monge -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $monge -> getCathegory() . "</p>";
echo "<p> Gusto: " . $monge -> getTaste() . "</p>";
echo "</div>";

$purina = new Food ("Purina Pro Plan Veterinary", 17.00, "Cibo per cani", "Vegetali");
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $purina -> getDescription() . "</p>";
echo "<p> Prezzo: " . $purina -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $purina -> getCathegory() . "</p>";
echo "<p> Gusto: " . $purina -> getTaste() . "</p>";
echo "</div>";

?>
<?php 
include __DIR__ . "/../fatherComp.php";

class Bed extends Product {
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

$spikeclassic = new Bed ("Spike Classic", 68.49, "Cuccia per animali", "Cuccia da esterno");
echo "<div style='display:inline-block;'>";
echo "<p> Nome Prodotto: " . $spikeclassic -> getDescription() . "</p>";
echo "<p> Prezzo: " . $spikeclassic -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $spikeclassic -> getCathegory() . "</p>";
echo "<p> Tipo giocattolo: " . $spikeclassic -> getType() . "</p>";
echo "</div>";

$spikecomfort = new Bed ("Spike Comfort", 97.30, "Cuccia per animali", "Cuccia da interno");
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $spikecomfort -> getDescription() . "</p>";
echo "<p> Prezzo: " . $spikecomfort -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $spikecomfort -> getCathegory() . "</p>";
echo "<p> Tipo giocattolo: " . $spikecomfort -> getType() . "</p>";
echo "</div>";

$spikespecial = new Bed ("Spike Special", 107.99, "Cuccia per animali", "Cuccia per automobile");
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $spikespecial -> getDescription() . "</p>";
echo "<p> Prezzo: " . $spikespecial -> getPrice() . "&#8364;</p>";
echo "<p> Categoria: " . $spikespecial -> getCathegory() . "</p>";
echo "<p> Tipo giocattolo: " . $spikespecial -> getType() . "</p>";
echo "</div>";

?>
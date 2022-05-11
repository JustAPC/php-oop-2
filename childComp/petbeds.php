<?php 
include __DIR__ . "/../fatherComp.php";

class Bed extends Product {
    public $type;

    public function __construct ($_description, $_price, $_category, $_type, $_registeredUser) {
        parent::__construct ($_description, $_price, $_category, $_registeredUser);
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

// ------------- Spike Classic ------------------
$user = new User (false);
$spikeclassic = new Bed ("Spike Classic", 68.49, "Cuccia per animali", "Cuccia da esterno", $user);
echo "<div style='display:inline-block;'>";
echo "<p> Nome Prodotto: " . $spikeclassic -> getDescription() . "</p>";

if ($spikeclassic -> user -> isRegistered == true) {
    echo "<p> Prezzo scontato: " . $spikeclassic -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $spikeclassic -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $spikeclassic -> getCategory() . "</p>";
echo "<p> Tipo giocattolo: " . $spikeclassic -> getType() . "</p>";
echo "</div>";


// ------------- Spike Comfort ------------------
$user = new User (true);
$spikecomfort = new Bed ("Spike Comfort", 97.30, "Cuccia per animali", "Cuccia da interno", $user);
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $spikecomfort -> getDescription() . "</p>";

if ($spikecomfort -> user -> isRegistered == true) {
    echo "<p> Prezzo scontato: " . $spikecomfort -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $spikecomfort -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $spikecomfort -> getCategory() . "</p>";
echo "<p> Tipo giocattolo: " . $spikecomfort -> getType() . "</p>";
echo "</div>";


// ------------- Spike Special ------------------
$user = new User (false);
$spikespecial = new Bed ("Spike Special", 107.99, "Cuccia per animali", "Cuccia per automobile", $user);
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $spikespecial -> getDescription() . "</p>";

if ($spikespecial -> user -> isRegistered == true) {
    echo "<p> Prezzo scontato: " . $spikespecial -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $spikespecial -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $spikespecial -> getCategory() . "</p>";
echo "<p> Tipo giocattolo: " . $spikespecial -> getType() . "</p>";
echo "</div>";

?>
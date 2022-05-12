<?php 
include __DIR__ . "/../products.php";

class Toy extends Product {
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

$userInfo = new User (true, 11, 2023);

// ------------- Frisbee ------------------
$frisbee = new Toy ("Geo Frisbee Tornado", 1.90, "Giocattolo per cani", "Frisbee", $userInfo);
echo "<div style='display:inline-block;'>";
echo "<p> Nome Prodotto: " . $frisbee -> getDescription() . "</p>";

if ($frisbee -> userInfo -> isRegistered == true) {
    echo "<p> Prezzo Scontato: " . $frisbee -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $frisbee -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $frisbee -> getCategory() . "</p>";
echo "<p> Tipo giocattolo: " . $frisbee -> getType() . "</p>";
echo "</div>";


// ------------- Corda ------------------
$corda = new Toy ("Corda Dentale per Cani", 14.30, "Giocattolo per cani", "Corda da masticare", $userInfo);
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $corda -> getDescription() . "</p>";

if ($frisbee -> userInfo -> isRegistered == true) {
    echo "<p> Prezzo Scontato: " . $corda -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $corda -> getPrice() . "&#8364;</p>";
}
echo "<p> Categoria: " . $corda -> getCategory() . "</p>";
echo "<p> Tipo giocattolo: " . $corda -> getType() . "</p>";
echo "</div>";


// ------------- Peluche ------------------
$peluche = new Toy ("Peluche per cane", 9.95, "Giocattolo per cani", "Peluche morbido", $userInfo);
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $peluche -> getDescription() . "</p>";

if ($frisbee -> userInfo -> isRegistered == true) {
    echo "<p> Prezzo Scontato: " . $peluche -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $peluche -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $peluche -> getCategory() . "</p>";
echo "<p> Tipo giocattolo: " . $peluche -> getType() . "</p>";
echo "</div>";

if ($userInfo -> ccValidation($currentMonth, $currentYear) == true) {
    echo "<div style='margin-top:50px;'>La tua carta è valida!</div>";
} else {
    throw new Exception ("La tua carta non è valida");
}
?>
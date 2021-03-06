<?php 
include __DIR__ . "/../products.php";

class Food extends Product {
    public $taste;

    public function __construct ($_description, $_price, $_category, $_taste, $_registeredUser) {
        parent::__construct ($_description, $_price, $_category, $_registeredUser);
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

$userInfo = new User (true, 04, 2023);

// ------------- Royal Canin ------------------
$royalCanin = new Food ("Royal Canin V-Diet", 3.35, "Cibo per cani", "Salmone e Riso", $userInfo);
echo "<div style='display:inline-block;'>";
echo "<p> Nome Prodotto: " . $royalCanin -> getDescription() . "</p>";

if ($royalCanin -> userInfo -> isRegistered == true) {
    echo "<p> Prezzo Scontato: " . $royalCanin -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $royalCanin -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $royalCanin -> getCategory() . "</p>";
echo "<p> Gusto: " . $royalCanin -> getTaste() . "</p>";
echo "</div>";


// ------------- Monge ------------------
$monge = new Food ("Monge All Breeds", 45.99, "Cibo per cani", "Pollo", $userInfo);
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $monge -> getDescription() . "</p>";

if ($monge -> userInfo -> isRegistered == true) {
    echo "<p> Prezzo Scontato: " . $monge -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $monge -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $monge -> getCategory() . "</p>";
echo "<p> Gusto: " . $monge -> getTaste() . "</p>";
echo "</div>";


// ------------- Purina ------------------
$purina = new Food ("Purina Pro Plan Veterinary", 17.00, "Cibo per cani", "Vegetali", $userInfo);
echo "<div style='display:inline-block; margin-left: 50px;'>";
echo "<p> Nome Prodotto: " . $purina -> getDescription() . "</p>";

if ($purina -> userInfo -> isRegistered == true) {
    echo "<p> Prezzo scontato: " . $purina -> getPrice() . "&#8364;</p>";
} else {
    echo "<p> Prezzo: " . $purina -> getPrice() . "&#8364;</p>";
}

echo "<p> Categoria: " . $purina -> getCategory() . "</p>";
echo "<p> Gusto: " . $purina -> getTaste() . "</p>";
echo "</div>";

if ($userInfo -> ccValidation($currentMonth, $currentYear) == true) {
    echo "<div style='margin-top:50px;'>La tua carta ?? valida!</div>";
} else {
    throw new Exception ("La tua carta non ?? valida");
}

?>
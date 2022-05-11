<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php 

$currentDate = date('d/m/Y', time());

class Product {
    protected $description;
    protected $price;
    protected $cathegory;

    public function __construct ($_description, $_price, $_cathegory) {
        $this -> setDescription ($_description);
        $this -> setPrice ($_price);
        $this -> setCathegory ($_cathegory);
    }

    public function setDescription ($_description){
        $this -> description = $_description;
        return $this;
    }

    public function getDescription () {
        return $this -> description;
    }
    
    public function setPrice ($_price){
        $this -> price = $_price;
        return $this;
    }
    
    public function getPrice () {
        return $this -> price;
    }

    public function setCathegory ($_cathegory){
        $this -> cathegory = $_cathegory;
        return $this;
    }

    public function getCathegory () {
        return $this -> cathegory;

    }

    
}
?>
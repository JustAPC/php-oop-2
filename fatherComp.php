<?php 

$currentDate = date('d/m/Y', time());

class Product {
    protected $description;
    protected $price;
    protected $category;
    public $registeredUser;

    public function __construct ($_description, $_price, $_category, $_registeredUser) {
        $this -> setDescription ($_description);
        $this -> setPrice ($_price);
        $this -> setCategory ($_category);
        $this -> setRegisteredUser ($_registeredUser);
    }

    public function setDescription ($_description){
        $this -> description = $_description;
        return $this;
    }

    public function getDescription () {
        return $this -> description;
    }
    
    public function setRegisteredUser($_registeredUser) {
        $this -> registeredUser = $_registeredUser;
        return $this;
    }

    public function setPrice ($_price){
        $this -> price = $_price;
        return $this;
    }
    
    public function getPrice () {
        return $this -> price;
    }

    public function setCategory ($_category){
        $this -> category = $_category;
        return $this;
    }

    public function getCategory () {
        return $this -> category;

    }

    
}
?>
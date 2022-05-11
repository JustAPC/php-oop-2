<?php 

$currentDate = date('d/m/Y', time());

class Product {
    protected $description;
    protected $price;
    protected $category;
    public $user;

    public function __construct ($_description, $_price, $_category, $_user) {
        $this -> setDescription ($_description);
        $this -> user = $_user;
        $this -> setPrice ($_price);
        $this -> setCategory ($_category);
    }

    public function setDescription ($_description){
        $this -> description = $_description;
        return $this;
    }

    public function getDescription () {
        return $this -> description;
    }

    public function setPrice ($_price){
        if ($this -> user -> isRegistered == true) {
            $this -> price = $_price - ($_price * 0.2);
        } else {
        $this -> price = $_price;
        }
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

class User {
    public $isRegistered;

    public function __construct ($_isRegistered) {
        $this -> isRegistered = $_isRegistered;
    }

}

    
?>
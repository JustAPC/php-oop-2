<?php 

$currentMonth = date('m');
$currentYear = date ('Y');

class Product {
    protected $description;
    protected $price;
    protected $category;
    public $userInfo;

    public function __construct ($_description, $_price, $_category, $_userInfo) {
        $this -> setDescription ($_description);
        $this -> userInfo = $_userInfo;
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
        if ($this -> userInfo -> isRegistered == true) {
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
    use CreditCard;
}

trait CreditCard {
    public $ccExpiringMonth;
    public $ccExpiringYear;

    public function __construct ($_isRegistered, $_ccExpiringMonth, $_ccExpiringYear) {
        $this -> isRegistered = $_isRegistered;
        $this -> ccExpiringMonth = $_ccExpiringMonth;
        $this -> ccExpriingYear = $_ccExpiringYear;
    }
    
    public function ccValidation ($_ccExpiringMonth, $_ccExpiringYear, $currentMonth, $currentYear) {
        if ($_ccExpiringYear > $currentYear) {
            return true;
        } else if ($_ccExpiringYear == $currentYear) {
            if ($_ccExpiringMonth >= $currentMonth) {
                return true;
            } else {
                return false;
            }
        }
    }
    
}

    
?>
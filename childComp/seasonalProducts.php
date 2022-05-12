<?php 
include __DIR__ . "/../products.php";

$monthAvailability = rand (1, 12);
$monthAvailability2 = rand (1, 12);

class SeasonalProduct extends Product {
    public $available_from = 5;
    public $available_to = 9;

    public function productAvailability($currentMonth) {
        if ($this -> available_from >= $currentMonth && $this -> available_to <= $currentMonth) {
            return true;
        } else {
            return false;
        }
    }
}

?>
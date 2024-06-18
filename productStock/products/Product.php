<?php 
    class Product {

        public function __construct(public $id, public $name, public $price, public $stock)
        {
            
        }
    }

    $products = [
        new Product(1, 'doliprane', 10, 42),
        new Product(2, 'aspirine', 8, 28),
        new Product(3, 'ibuprophène', 11, 30)
    ]
?>
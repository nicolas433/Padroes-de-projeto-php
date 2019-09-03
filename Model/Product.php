<?php
    namespace Model;
    
    class Product {
        private $price;
        
        public function __construct($p) {
            $this->price = $p;
        }

        public function getPrice() {
            return $this->price;
        }
        public function setPrice($newPrice) {
            $this->price = $newPrice;
        }

        
    }
<?php   
    namespace Factory;
    use Model\Product;

    class ProductFactory extends Product{
        public static function criarProduto($p) {
            return new Product($p);
        }
    }
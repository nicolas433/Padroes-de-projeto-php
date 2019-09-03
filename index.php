<?php
    spl_autoload_register(function($class){
        require_once(str_replace('\\', '/', $class.".php"));        
    });

    use Factory\ProductFactory as Fabrica;

    $p1 = Fabrica::criarProduto(10);

    echo $p1->getPrice();
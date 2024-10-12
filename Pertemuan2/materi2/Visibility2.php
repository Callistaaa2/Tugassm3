<?php
    require_once "Visibility.php";
    require_once "Visibility3.php";

    //membuat objek produk
    $product = new product("Apple", 20000);

    //menampilkan info name dan price
    echo $product->getName() . PHP_EOL;
    echo $product->getPrice() . PHP_EOL;

    $product2 = new produkturunan("Nanas", 30000);
    $product2->info();

?>
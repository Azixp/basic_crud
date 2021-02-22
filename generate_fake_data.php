<?php

use App\Entity\Product;
use App\Model\ProductManager;

require 'vendor/autoload.php';

$productManager = new ProductManager;
for($i = 1; $i <= 10; $i++){
    $product = new Product;
    $product->setTitle("Product-$i")
            ->setDescription('Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam dolor sit amet consectetur adipisicing elit. Repellat, ullam.')
            ->setImage('https://picsum.photos/300/300');
    $productManager->addProduct($product);
}
<?php
namespace App\Model;

use App\Entity\Product;

interface ManagerInterface
{
    public function addProduct(Product $product) : void;
    public function selectProducts() : array;
    public function selectProduct(int $productId) : Product;
    public function deleteProduct(int $productId) : void;
    public function updateProduct(Product $product) : void;
}
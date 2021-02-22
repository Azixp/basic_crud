<?php
namespace App\Model;

use App\Entity\Product;
use App\Model\ManagerInterface;
use \PDO;

class ProductManager implements ManagerInterface
{
    protected $database;

    public function __construct()
    {
        $this->database = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS
            ]);
    }

    public function addProduct(Product $product): void
    {
        $request = $this->database->prepare('INSERT INTO products(title, description, image) VALUES(:title, :description, :image)');
        $request->execute([
            'title' => $product->getTitle(),
            'description' => $product->getDescription(),
            'image' => $product->getImage()
        ]);
        $request->closeCursor();
    }

    public function selectProducts(): array
    {
        $request = $this->database->prepare('SELECT id, title, description, image FROM products');
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_CLASS, Product::class);
        $request->closeCursor();
        return $data;      
    }

    public function selectProduct(int $productId): Product
    {
        $request = $this->database->prepare('SELECT id, title, description, image FROM products WHERE id = :id');
        $request->execute([
            'id' => $productId
        ]);
        $request->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $data = $request->fetch();
        $request->closeCursor();
        return $data;
    }

    public function deleteProduct(int $productId): void
    {
        $request = $this->database->prepare('DELETE FROM products WHERE id = :id');
        $request->execute([
            'id' => $productId
        ]);
        $request->closeCursor();
    }

    public function updateProduct(Product $product): void
    {
        $request = $this->database->prepare('UPDATE products SET title = :title, description = :description WHERE id = :idProduct');
        $request->execute([
            'title' => $product->getTitle(),
            'description' => $product->getDescription(),
            'idProduct' => $product->getId()
        ]);
        $request->closeCursor();
    }
}
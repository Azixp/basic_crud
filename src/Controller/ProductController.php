<?php
namespace App\Controller;

use App\Entity\Product;
use App\Model\ManagerInterface;

class ProductController
{
    protected $productManager;

    public function __construct(ManagerInterface $manager)
    {
        $this->productManager = $manager;
    }

    public function create()
    {
        $product = new Product;
        if(isset($_POST['confirmation'])){
            $titleValue = trim($_POST['title']);
            $descValue = trim($_POST['description']);
            $imageValue = trim($_POST['imageLink']);
            if(!empty($titleValue) && !empty($descValue) && !empty($imageValue)){
                $product->setTitle($titleValue)
                        ->setDescription($descValue)
                        ->setImage($imageValue);
                $this->productManager->addProduct($product);
                $message = 'Your new Product has been sucessfully created !';
            } else {
                $errorMessage = 'Can\'t send empty values';
            }
        }
        require __DIR__."/../View/create.html.php";
    }

    public function read()
    {
        $product = $this->productManager->selectProduct($_GET['id']);
        require __DIR__."/../View/read.html.php";
    }

    public function update()
    {
        $product = $this->productManager->selectProduct($_GET['id']);
        if(isset($_POST['confirmation'])){
            $titleValue = trim($_POST['title']);
            $descValue = trim($_POST['description']);
            if(!empty($titleValue) && !empty($descValue)){
                $product->setTitle($titleValue)
                        ->setDescription($descValue);
                $this->productManager->updateProduct($product);
                $message = 'Your product has been sucessfully edited !';
            } else {
                $errorMessage = 'Can\'t send empty values';
            }
        }
        require __DIR__."/../View/update.html.php";
    }

    public function delete()
    {
        $this->productManager->deleteProduct($_GET['id']);
        header('location: ?action=listProducts&deleted=1');
    }


}
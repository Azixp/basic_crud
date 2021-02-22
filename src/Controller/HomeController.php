<?php
namespace App\Controller;

use App\Model\ManagerInterface;

class HomeController
{
    protected $productManager;

    public function __construct(ManagerInterface $manager)
    {
        $this->productManager = $manager; 
    }

    public function render()
    {
        $products = $this->productManager->selectProducts();
        require __DIR__."/../View/home.html.php";
    }
}
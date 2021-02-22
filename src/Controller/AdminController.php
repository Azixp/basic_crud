<?php

namespace App\Controller;

use App\Model\ManagerInterface;

class AdminController
{
    protected $productManager;

    public function __construct(ManagerInterface $manager)
    {
        $this->productManager = $manager;
    }

    public function render()
    {
        $productsList = $this->productManager->selectProducts();
        require __DIR__."/../View/admin.html.php";
    }
}
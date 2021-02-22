<?php

use App\Controller\AdminController;
use App\Controller\ErrorController;
use App\Controller\HomeController;
use App\Controller\ProductController;
use App\Model\ProductManager;

require '../vendor/autoload.php';

$productManager = new ProductManager;
$homeController = new HomeController($productManager);
$adminController = new AdminController($productManager);
$productController = new ProductController($productManager);
$errorController = new ErrorController;

if(isset($_GET['action'])){
    if($_GET['action'] === 'showProducts'){
        $homeController->render();
    } else if($_GET['action'] === 'productDetails'){
        if(!empty($_GET['id']) && is_numeric($_GET['id'])){
            $productController->read();
        } else {
            $errorController->render();
        }
    } else if($_GET['action'] === 'listProducts'){
        $adminController->render();
    } else if($_GET['action'] === 'editProduct'){
        if(!empty($_GET['id']) && is_numeric($_GET['id'])){
            $productController->update();
        }
    } else if($_GET['action'] === 'delete'){
        if(!empty($_GET['id']) && is_numeric($_GET['id'])){
            $productController->delete();
        }
    } else if($_GET['action'] === 'createProduct'){
        $productController->create();
    } else {
        $errorController->render();
    }
} else {
    $homeController->render();
}
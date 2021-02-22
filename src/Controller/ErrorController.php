<?php
namespace App\Controller;

class ErrorController
{
    public function render()
    {
        require __DIR__."/../View/error.html.php";
    }
}
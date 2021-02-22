<?php require "header.html.php";?>
<?php
if(isset($_GET['deleted'])){
    echo '<div class="alert alert-success mt-2" role="alert"> The product has been successfully deleted ! </div>';
}
?>
<ul class="list-group mx-auto" style="width: 600px;">
    <?php foreach($productsList as $product) : ?> 
        <li class="list-group-item">
            <?= $product->getTitle() ?> 
             <a href="?action=editProduct&id=<?= $product->getId() ?>" class="btn btn-primary btn-sm ml-2" >Edit Product</a> 
             <a href="?action=delete&id=<?= $product->getId() ?>" class="btn btn-danger btn-sm" >Delete Product</a> 
        </li>
    <?php endforeach; ?>
</ul>
<div class="mx-auto mt-1" style="width: 600px;">
    <a href="?action=createProduct" class="btn btn-success">Add new product</a>
</div>
<?php require "footer.html.php";?>


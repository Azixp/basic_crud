<?php require "header.html.php";?>
<div class="row">
    <?php foreach($products as $product) :?>
        <div class="col-3 m-1 mx-auto">
            <div class="card" data-aos="flip-up">
                <img src="<?= $product->getImage() ?>" class="img-fluid" alt="">
                <div class="card-body">
                    <h4 class="card-title"> <?= $product->getTitle() ?> </h4>
                    <p class="card-text"> <?= $product->getDescription() ?> </p>
                    <a href="?action=productDetails&id=<?= $product->getId() ?>" class="btn btn-primary btn-sm">Show détails</a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
<?php require "footer.html.php";?>
<?php require "header.html.php";?>
<div class="row">
        <div class="col-4 m-1 mx-auto">
            <div class="card" data-aos="flip-up">
                <img src="<?= $product->getImage() ?>" class="img-fluid" alt="">
                <div class="card-body">
                    <h4 class="card-title"> <?= $product->getTitle() ?> </h4>
                    <p class="card-text"> <?= $product->getDescription() ?> </p>
                </div>
            </div>
        </div>
</div>
<?php require "footer.html.php";?>

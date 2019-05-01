<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");

use Bitm\Product\Product;
use Bitm\Utility\Utility;

$query = "SELECT * FROM products ORDER BY id DESC";
$sth = $conn->prepare($query);
$sth->execute();
$allproducts = $sth->fetchAll(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html lang="en">
<?php include_once('elements/head.php'); ?>
<body>
<?php include_once('elements/header.php'); ?>
<main role="main">

     <div class="container marketing">
        <div class="row">
            <?php
            foreach($allproducts as $product):
                ?>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?=UPLOADS?><?=$product['picture'];?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?=$product['title'];?></h5>
                            <p class="card-text"><?=$product['short_description'];?></p>
                            <a href="addToCart.html" class="btn btn-primary">Add To Cart</a>
                            <a href="detail.php?id=<?=$product['id'];?>" class="btn btn-info">View Detail</a>
                        </div>
                    </div>

                </div>
                <?php
            endforeach;
            ?>
        </div>

        <hr class="featurette-divider">
    </div>
    <?php include_once('elements/footer.php'); ?>
</main>
<?php include_once('elements/scripts.php'); ?>
</body>
</html>
<?php
use Bitm\Product\Product;
use Bitm\Utility\Utility;

$product = new Product();
$newproducts = $product->getNewProducts();
//Utility::dd($banners);
?>

<?php
foreach($newproducts as $newproduct):
?>
<div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img src="<?=UPLOADS?><?=$newproduct['picture'];?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?=$newproduct['title'];?></h5>
            <p class="card-text"><?=$newproduct['short_description'];?></p>
            <a href="addToCart.html" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>

</div>
<?php
endforeach;
?>
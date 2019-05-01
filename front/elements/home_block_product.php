<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
//selection query
$query = "SELECT * FROM products ORDER BY id DESC";
$sth = $conn->prepare($query);
$sth->execute();
$newproducts = $sth->fetchAll(PDO::FETCH_ASSOC);
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
            <a href="addtocart.php" class="btn btn-primary">Add To Cart</a>
        </div>
    </div>

</div>
<?php
endforeach;
?>
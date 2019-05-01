<?php

include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Utility\Message;
use Bitm\Utility\Utility;



//selection query
$query = 'SELECT * FROM `admins` WHERE id = '.$_GET['id'];
$sth = $conn->prepare($query);
$sth->execute();

$admin = $sth->fetch(PDO::FETCH_ASSOC);

?>
<?php
ob_start();
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <?php
            if($message = Message::get()){
                ?>
                <div class="alert alert-success">
                    <?php echo $message;?>
                </div>
                <?php
            }
            ?>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 >admin</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                        <span data-feather="calendar"></span>
                        <a href="../form.html" style="color: black">Add New</a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ">
                    <section >
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm col-md-6 col-lg-3 ">
                                    <div class="product">
                                        <a href="#" class="admin-name">
                                            <h2><a href="#"><?php echo $admin['name'];?></a></h2>
                                        </a>
                                        <div class="admin-email">
                                            <h5><?php echo $admin['email'];?></h5>
                                            <div class="d-flex">
                                                <div class="admin-phone">
                                                    <?php echo $admin['phone'];?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>



        </main>
    </div>
</div>

<?php
$pagecontent = ob_get_contents();
ob_end_clean();
echo str_replace("##MAIN_CONTENT##",$pagecontent,$layout);
?>
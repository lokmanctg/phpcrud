<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Utility\Message;
use Bitm\Utility\Utility;
?>

<?php
ob_start();
?>

<main class="my-form">
    <?php
    if($message = Message::get()){
        ?>
        <div class="alert alert-success">
            <?php echo $message;?>
        </div>
        <?php
    }
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Page </div>
                    <div class="card-body">
                        <form id="my-form" onsubmit="return validform()" action="store.php" method="post">


                            <div class="form-group row">
                                <div class="col-md-6">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>

                                    <input type="text" id="name" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                                    <input type="text" id="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>

                                    <input type="password" id="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Phone:</label>

                                    <input type="text" id="phone" class="form-control" name="phone">
                                </div>
                            </div>



                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>

                        </form>



        </main>
<?php
$pagecontent = ob_get_contents();
ob_end_clean();
echo str_replace("##MAIN_CONTENT##",$pagecontent,$layout);
?>
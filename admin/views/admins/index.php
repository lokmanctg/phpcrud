<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/phpcrud/bootstrap.php");
use Bitm\Utility\Message;
use Bitm\Utility\Utility;

//connect to database


//selection query
$query = "SELECT * FROM `admins`";
$sth = $conn->prepare($query);
$sth->execute();
$admins = $sth->fetchAll(PDO::FETCH_ASSOC);
//foreach($products as $row){
//echo "<pre>";
//print_r($row['mrp']);
//echo "</pre>";
//

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
                    <h1 >Admin</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary">
                        <span data-feather="calendar"></span>
                        <a href="<?=VIEW;?>admins/create.php" style="color: black">Add new Admin</a>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($admins){
                                foreach($admins as $admin){
                                    ?>
                                    <tr class="text-center">
                                        <td class="admin-sl">&nbsp;</td>
                                        <td class="admin-name">
                                            <h3><a href="view.php?id=<?php echo $admin['id'] ?>"><?php echo $admin['name'];?></a></h3>
                                        </td>
                                        <td class="email-admin">
                                            <p><?php echo $admin['email']?></p>
                                        </td>

                                        <td class="admin-phone">
                                            <p><?php echo $admin['phone'];?></p>
                                        </td>
                                        <td class="admin-phone">
                                            <p><?php echo $admin['password'];?></p>
                                        </td>

                                        <td> <a href="edit.php?id=<?php echo $admin['id']?>">Edit</a>
                                            | <a href="delete.php?id=<?php echo $admin['id']?>">Delete</a></td>
                                    </tr>
                                <?php }}else{
                                ?>
                                <tr class="text-center">
                                    <td colspan="5">
                                        There is no product available. <a href="create.php">Click Here</a> to add a product.
                                    </td>
                                </tr>
                                <?php
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </main>
<?php
$pagecontent = ob_get_contents();
ob_end_clean();
echo str_replace("##MAIN_CONTENT##",$pagecontent,$layout);
?>


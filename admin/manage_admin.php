<?php
if(isset($_POST['submit'])){
    // get Data from Web Form 
    $email    = $_POST['admin_email'];
    $password = $_POST['admin_password'];
    $fullname = $_POST['admin_fullname'];
    
    // open connection 
    $conn = mysqli_connect("localhost","root","","ebay");
    if(!$conn){
        die("cannot connect to server");
    }
    // perfourm insert query 
    $query = "insert into admin(admin_email,admin_password,full_name) values('$email','$password','$fullname')";
    mysqli_query($conn,$query);
    
}

?>
<?php include '../includes/admin_header.php'; ?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Creat Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Add Admin</h3>
                            </div>
                            <hr>
                            <form action="manage_admin.php" method="post">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                    <input id="cc-pament" name="admin_email" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                    <input id="cc-pament" name="admin_password" type="password" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                                    <input id="cc-pament" name="admin_fullname" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                
                                
                                
                                <div>
                                    <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Create</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <?php include '../includes/admin_footer.php'; ?>

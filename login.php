<?php include 'include/header.php';?>
<?php include 'include/navbar.php';?>






    <!-- Start Form Login -->
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto my-5">
                                <!-- Start Code errors -->
                                <?php
                if(isset($_SESSION['errors'])):
                    foreach ($_SESSION['errors'] as $error):
            ?>

                            <div class="alert alert-danger text-center">
                                <?php echo $error;?>
                            </div>

            <?php    
                
                    endforeach;
                    unset($_SESSION['errors']);

                endif;
            ?>

                <!-- END Code errors -->
            <h1 class="border p-2 my-2 bg-dark text-light text-center">Login</h1>
                <form class="border p-3 mx-auto my-5" action="handlers/handel-login.php" method="POST">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Password">
                    </div>

                    <div class="mb-3 p-2 my-1">
                        <input type="submit" Value="login" class="form-control btn btn-dark">
                    </div>




                </form>
            </div>
        </div>
    </div>
    <!-- END Form Login-->







<?php include 'include/footer.php';?>

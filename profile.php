<?php include 'include/header.php';?>
<?php include 'include/navbar.php';?>




    <!-- Start Index -->
<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table table-borderd">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach(  $_SESSION['employee'] as $employee) : ?>

                    <tr>
                        <td><?php $employee ['name']?></td>
                        <td><?php $employee ['email']?></td>
                        <td><?php $employee ['password']?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <h1 class="border p-2 my-2 bg-dark text-light text-center">Profile</h1>

    <!-- END Index-->



























<?php include 'include/footer.php';?>

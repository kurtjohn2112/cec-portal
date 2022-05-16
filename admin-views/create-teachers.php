<?php include '../html/head.html';
include '../functions/admin-logic.php';

if (isset($_POST['register'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];



    create_teacher($fname, $lname, $username, $password);
}

include 'navbar-admin.php';
?>


<section class="p-5 mt-5 mt-5">
    <div class="container">

        <!-- <a href="login.php" class="btn btn-secondary"> <i class="fa fa-arrow-circle-left" aria-hidden="true"> Back to Login Page</i></a> -->
        <div class="card w-50 mx-auto shadow">
            <div class="card-header bg-dark p-3">

            </div>
            <div class="card-body ">
                <form action="" method="post">
                    <div class="row mt-3 ">
                        <div class="col-6">
                            <input type="text" name="firstname" id="" class="form-control form-control-lg bg-light">
                            <div class="form-text">Enter Firstname</div>
                        </div>
                        <div class="col-6">
                            <input type="text" name="lastname" id="" class="form-control form-control-lg bg-light">
                            <div class="form-text">Enter Lastname</div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <input type="text" name="username" id="" class="form-control form-control-lg bg-light">
                            <div class="form-text">Enter Username</div>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <input type="password" name="password" id="" class="form-control form-control-lg bg-light">
                            <div class="form-text">Enter Password</div>
                        </div>

                    </div>


                    <div class="mt-4">
                        <button type="submit" name="register" class="btn btn-success mt-5">Create teacher</button>

                    </div>

                </form>
            </div>
        </div>
        <div class="container mt-5">
            <ul class="list-group">
                <?php if (!empty(show('teachers'))) :   ?>
                    <?php foreach (show('teachers') as $row) : ?>
                        <li class="list-group-item">
                            <?php echo $row['fname'] . " " . $row['lname']  ?>
                            <span class="float-end">
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </span>
                        </li>
                    <?php endforeach; ?>
                <?php endif;   ?>
            </ul>
        </div>
    </div>
</section>

<?php include '../html/foot.html'; ?>
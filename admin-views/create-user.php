<?php include '../html/head.html';
include '../functions/admin-logic.php';

if (isset($_POST['register'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $year = $_POST['year'];
    $section = $_POST['section'];


    register($fname, $lname, $username, $password, $section, $year);
}

include 'navbar-admin.php';
?>


<section class="p-5 mt-5 bg-dark mt-5">
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
                    <div class="row mt-4">
                        <div class="col-12">
                            <select class="form-select" name="year">

                                <option value="FIRST YEAR">FIRST YEAR</option>
                                <option value="SECOND YEAR">SECOND YEAR</option>
                                <option value="THIRD YEAR">THIRD YEAR</option>
                                <option value="FOURTH YEAR">FOURTH YEAR</option>
                            </select>
                            <div class="form-text">Select year level</div>
                        </div>
                    </div>
                    <div class="row mt-4">

                        <div class="col-12">
                            <select class="form-select" name="section">
                                <?php foreach (show('sections') as $section) : ?>
                                    <option value="<?php echo $section['section'] ?>"><?php echo $section['section'] ?></option>
                                <?php endforeach; ?>

                            </select>
                            <div class="form-text">Select Section</div>
                        </div>

                    </div>
                    <div class="mt-4">
                        <button type="submit" name="register" class="btn btn-danger mt-5">Register</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<?php include '../html/foot.html'; ?>
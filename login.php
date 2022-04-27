<?php include 'html/head.html';
include 'functions/admin-logic.php';

if (isset($_POST['login'])) {
   
    $username = $_POST['username'];
    $password = $_POST['password'];

   login($username,$password);
}
?>

<section class="p-5 mt-5">
    <div class="container">


        <h1 class="display-4 text-center">CEC IT PORTAL</h1>
        <form action="" method="post" class="mt-5 border p-5 shadow">
            <input type="text" name="username" placeholder="" id="" class="form-control form-control-lg">
            <div class="form-text">Enter Username</div>
            <input type="password" name="password" placeholder="" id="" class="form-control form-control-lg mt-4">
            <div class="form-text">Enter Password</div>

            <button type="submit" name="login" class="btn btn-danger mt-4  w-25 btn-lg">Login</button>
        </form>
    </div>
</section>

<?php include 'html/foot.html'; ?>
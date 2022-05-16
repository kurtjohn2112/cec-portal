<?php
include '../html/head.html';
include '../functions//admin-logic.php';

include 'navbar-admin.php';

if(isset($_POST['add_subject'])){
    $sub = $_POST['sub'];
    add_subject($sub);

}
?>


<main class="my-5">
    <div class="container">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" name="sub" id="" class="form-control" autofocus>
                <button type="submit" name="add_subject" class="btn btn-success">Save subject</button>
            </div>
        </form>

        <?php if (!empty(show('subjects'))) : ?>
            <ul class="list-group mt-5 w-50 mx-auto">
                <?php foreach (show('subjects') as $row) : ?>
                    <li class="list-group-item"><?php echo $row['name'] ?>

                        <a href="delete.php?sub_id=<?php echo $row['id'] ?>" class="btn btn-danger float-end"> <i class="fas fa-trash"></i> </a>

                    </li>

                <?php endforeach; ?>

            </ul>
        <?php endif; ?>

    </div>

</main>






<?php include '../html/head.html'; ?>
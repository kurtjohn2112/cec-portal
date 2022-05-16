<?php
include '../html/head.html';
include '../functions//admin-logic.php';

include 'navbar-admin.php';
if (isset($_POST['add_section'])) {
    $section = $_POST['section'];
    add_section($section);
}
?>


<main class="my-5">


    <div class="container">
    

        <form action="" method="post" class="w-50 mx-auto">
            <div class="input-group">

                <input type="text" name="section" placeholder="e.g BSIT 1 SECTION 1" id="" class="form-control">
                <button type="submit" name="add_section" class="btn btn-success"><i class="fas fa-check"></i></button>
            </div>
        </form>
        <?php if (!empty(show('sections'))) : ?>
            <ul class="list-group mt-5 w-50 mx-auto">
                <?php foreach (show('sections') as $section) : ?>
                    <li class="list-group-item"><?php echo $section['section'] ?>
                        
                            <a href="delete.php?section_id=<?php echo $section['id'] ?>" class="btn btn-danger float-end"> <i class="fas fa-trash"></i> </a>
                        
                    </li>

                <?php endforeach; ?>

            </ul>
        <?php endif; ?>

    </div>

</main>






<?php include '../html/head.html'; ?>
<?php
include '../html/head.html';
include '../functions/student-logic.php';

include 'navbar-student.php';
?>


<main class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <p class="fw-bold">@<?php echo $_SESSION['fullname'] ?></p>
                        <p class="text-muted small">Section: <?php echo $_SESSION['section'] ?></p>
                        <p class="text-muted small">Year level: <?php echo $_SESSION['year'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <?php if (!empty(show('posts'))) : ?>
                    <?php foreach (show('posts') as $row) : ?>
                        <div class="card shadow mb-3">
                            <div class="card-body">
                                <p class="badge bg-info"><?php echo $row['type'] ?></p>
                                
                                <p class="text-muted fst-italic">
                                <?php echo $row['post'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="alert alert-secondary">NO POSTS OR ANNOUNCEMENTS YET</div>
                <?php endif; ?>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</main>






<?php include '../html/head.html'; ?>
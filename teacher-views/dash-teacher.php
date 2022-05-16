<?php
include '../html/head.html';
include '../functions/student-logic.php';

include 'navbar-admin.php';
foreach (show_week_date() as $day => $date) :

endforeach;
$date_array = show_week_date();
$first = reset($date_array);
$end = end($date_array);

?>


<main class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <p class="fw-bold">Teacher <?php echo $_SESSION['fullname'] ?></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="font-monospace">Current Date: <?php echo date("Y/m/d") ?> </p>
                <p class="font-monospace">Events for this week: <?php echo $first . " - " . $end ?> </p>
                <?php if (!empty(show('posts'))) : ?>
                    <?php
                    foreach (show('posts') as $event) : ?>
                        <?php foreach (show_week_date() as $day => $date) : ?>
                            <?php if ($event['date_posted'] == $date) : ?>
                                <div class="card shadow mb-3">
                                    <div class="card-body">
                                        
                                        <p class="badge bg-info"><?php echo $event['type'] ?></p>
                                        <p class="badge bg-danger">Date: <?php echo $event['date_posted'] ?></p>


                                        <p class="text-muted fst-italic">
                                            <?php echo $event['post'] ?>
                                        </p>
                                    </div>

                                </div>
                                
                            <?php endif; ?>
                        <?php endforeach; ?>


                    <?php
                    endforeach;
                    ?>
                <?php else : ?>
                    <div class="alert alert-secondary">NO POSTS OR ANNOUNCEMENTS YET</div>
                <?php endif; ?>



            </div>
            <div class="col-3">
                    <p class="text-muted">
                        All events:
                    </p>
                    <?php if (!empty(show('posts'))) : ?>
                    <?php
                    foreach (show('posts') as $event) : ?>
                      
                           
                                <div class="card shadow mb-3">
                                    <div class="card-body">
                                        
                                        <p class="badge bg-info"><?php echo $event['type'] ?></p>
                                        <p class="badge bg-danger">Date: <?php echo $event['date_posted'] ?></p>


                                        <p class="text-muted fst-italic">
                                            <?php echo $event['post'] ?>
                                        </p>
                                    </div>

                                </div>
                                
                           
                       


                    <?php
                    endforeach;
                    ?>
                <?php else : ?>
                    <div class="alert alert-secondary">NO POSTS OR ANNOUNCEMENTS YET</div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</main>






<?php include '../html/head.html'; ?>
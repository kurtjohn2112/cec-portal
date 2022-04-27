<?php
include '../html/head.html';
include '../functions/student-logic.php';

include 'navbar-student.php';
$student = show_data('users', 'id', $_SESSION['id']);
if (!empty(show_data_multiple('grades', 'std_id', $_SESSION['id']))) {
    $std_data = show_data_multiple('grades', 'std_id', $_SESSION['id']);
}
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
            <div class="col-9 p-5">
                <?php if (!empty($std_data)) : ?>
                    <table class="table table-bordered">
                        <thead>
                            <td>Subject Name</td>
                            <td>Grade</td>
                            <td>Semester</td>
                        </thead>
                        <tbody>
                            <?php foreach ($std_data as $row) : ?>
                                <tr>
                                    <td><?php echo $row['subject'] ?></td>
                                    <?php if($row['grade'] >= 3): ?>
                                        <td><p class="text-danger"><?php echo $row['grade'] ?></p></td>
                                    <?php elseif($row['grade'] >= 2 && $row['grade'] < 3): ?>
                                        <td><p class="text-warning"><?php echo $row['grade'] ?></p></td>
                                    <?php elseif($row['grade'] >= 1 && $row['grade'] < 2): ?>
                                        <td><p class="text-success"><?php echo $row['grade'] ?></p></td>
                                    <?php endif; ?>
                                    <td><?php echo $row['semester'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <div class="alert alert-secondary">
                        No grades created yet
                    </div>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</main>






<?php include '../html/head.html'; ?>
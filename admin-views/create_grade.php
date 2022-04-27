<?php
include '../html/head.html';
include '../functions//admin-logic.php';

include 'navbar-admin.php';


// print_r($std_data);

if (isset($_POST['add_grade'])) {
    $sub = $_POST['subject'];
    $grade = $_POST['grade'];
    $sem = $_POST['semester'];
    $id = $_POST['std_id'];

    add_grade($id, $grade, $sub, $sem);
}
$student = show_data('users', 'id', $_GET['stud_id']);
if (!empty(show_data_multiple('grades', 'std_id', $_GET['stud_id']))) {
    $std_data = show_data_multiple('grades', 'std_id', $_GET['stud_id']);
}

?>


<main class="my-5">
    <div class="container">
        <div class="card mb-5 shadow">
            <div class="card-body">
                <p>
                    <span class="font-monospace">Name:</span> <span class="text-uppercase"> <?php echo $student['firstname'] . " " . $student['lastname'] ?> </span>

                </p>
                <p> <span class="font-monospace">Section:</span> <?php echo $student['section'] ?></p>
                <p> <span class="font-monospace">Year Level:</span> <?php echo $student['year'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div class="mb-3">
                        <select name="subject" id="" class="form-select">
                            <?php foreach (show('subjects') as $row) : ?>
                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></li>
                                <?php endforeach; ?>
                        </select>
                        <div class="form-text">Select a subject</div>
                    </div>
                    <div class="mb-3">
                        <input type="number" step="0.01" name="grade" id="" class="form-control">
                        <div class="form-text">Enter Grade</div>
                    </div>
                    <div class="mb-3">
                        <select name="semester" id="" class="form-select">
                            <option value="FIRST SEMESTER">FIRST SEMESTER</option>
                            <option value="FIRST SECOND">SECOND SEMESTER</option>
                        </select>
                        <div class="form-text">Choose a semester</div>
                    </div>
                    <input type="hidden" name="std_id" value="<?php echo $_GET['stud_id'] ?>">
                    <button type="submit" name="add_grade" class="btn btn-primary">Submit Grades</button>


                </form>
            </div>
            <div class="col">
                <?php if (!empty($std_data)) : ?>
                    <table class="table">
                        <thead>
                            <td>Subject Name</td>
                            <td>Grade</td>
                            <td>Semester</td>
                        </thead>
                        <tbody>
                            <?php foreach ($std_data as $row) : ?>
                                <tr>
                                    <td><?php echo $row['subject'] ?></td>
                                    <td><?php echo $row['grade'] ?></td>
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
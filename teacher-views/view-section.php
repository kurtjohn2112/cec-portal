<?php
include '../html/head.html';
include '../functions/admin-logic.php';

$section = $_GET['section'];

$data = show_data_multiple('users', 'section', $section);



include 'navbar-admin.php';
?>

</div>

<main class="my-5">
    <div class="container">
        <table class="table table-striped">
            <thead class="table-dark">
                <td>Fullname</td>
                <td>Section</td>
                <td>Year</td>
                <td colspan="3">Actions</td>
            </thead>
            <tbody>
                <?php foreach($data as $row): ?>
                    <tr>
                        <td><?php echo $row['firstname']." ".$row['lastname'] ?></td>
                        <td><?php echo $row['section'] ?></td>
                        <td><?php echo $row['year'] ?></td>
                        <td> <a href="create_grade.php?stud_id=<?php echo $row['id'] ?>" class="text-decoration-none">Create a grade</a> </td>
                        <td> <a href="#" class="text-decoration-none btn btn-warning"> <i class="fas fa-user"></i> </a> </td>
                        <td> <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> </a> </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>






<?php include '../html/head.html'; ?>
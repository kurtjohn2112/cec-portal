<?php
include '../html/head.html';
include '../functions/admin-logic.php';

include 'navbar-admin.php';
?>


<main class="my-5">

    <div class="container">
        <p class="font-monospace">Select a section</p>
        <?php if (!empty(show('sections '))) : ?>
            <table class="table table-bordered">
                <thead>
                    <td>Section name</td>
                    <td>Action</td>
                </thead>
                <tbody>
                    <?php foreach (show('sections') as $section) : ?>
                        <tr>
                            <td><?php echo $section['section'] ?></td>
                            <td> <a href="view-section.php?section=<?php echo $section['section'] ?>" class="btn btn-info"> <i class="fas fa-eye"></i> </a> </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</main>






<?php include '../html/head.html'; ?>
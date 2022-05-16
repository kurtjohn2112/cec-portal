<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

?>

<nav class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container">
        <a href="dash-teacher.php" class="navbar-brand">
            Students Portal
        </a>
        <button class="navbar-toggler" data-bs-target="#nav-collapse" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon">

            </span>
        </button>

        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="dash-create-post.php" class="nav-link">Create an Announcement</a>
                </li>
                
                <!-- <li class="nav-item">
                    <a href="manage-sections.php" class="nav-link">Manage Sections</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="create-user.php" class="nav-link">Register a student</a>
                </li> -->
                <li class="nav-item">
                    <a href="manage-students.php" class="nav-link">Manage Students</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="create-teachers.php" class="nav-link">Manage teachers</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="manage-subjects.php" class="nav-link">Manage Subjects</a>
                </li> -->
            </ul>

        </div>

    </div>

</nav>


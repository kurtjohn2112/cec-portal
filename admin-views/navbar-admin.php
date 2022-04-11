<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

?>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a href="#" class="navbar-brand">
            Students Portal
        </a>
        <button class="navbar-toggler" data-bs-target="#nav-collapse" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon">

            </span>
        </button>

        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Announcements</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Notifications</a>
                </li>
            </ul>

        </div>
        <div class="dropdown mx-2">
            <a class="dropdown-toggle text-decoration-none text-muted" type="button" data-bs-toggle="dropdown">Dropdown</a>

            <div class="dropdown-menu">
                <a href="dash-create-post.php" class="dropdown-item">Posts</a>
                <a href="#" class="dropdown-item">Manage Account</a>
            </div>
        </div>
    </div>
</nav>
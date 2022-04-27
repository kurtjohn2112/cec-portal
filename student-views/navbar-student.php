

<nav class="navbar navbar-expand-lg bg-light navbar-light">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            Students Portal
        </a>
        <button class="navbar-toggler" data-bs-target="#nav-collapse" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon">

            </span>
        </button>

        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="view-grade.php" class="nav-link">Grades</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><?php echo $_SESSION['fullname'] ?></a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>

        </div>

    </div>

</nav>


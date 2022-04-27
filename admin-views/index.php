<?php include '../html/head.html' ?>


<?php include 'navbar-admin.php'; ?>


<section class="bg-dark text-light pt-5">
    <div class="container p-5">
        <div class="d-flex align-items-center justify-content-between">
            <div class="p-3">
                <h1 class="lead">CEC STUDENT'S PORTAL</h1>
                <p class="fst-italic fs-4">A one stop for school informations and events</p>
            </div>
            <img src="../svg/undraw_tweetstorm_re_n0rs.svg" class="img-fluid w-50" alt="">
        </div>
    </div>
</section>

<section class="p-5 bg-secondary bg-gradient">
    <div class="row justify-content-center text-center">
        <div class="col "> <a href="#" class="btn btn-light btn-lg shadow">Create an Announcement</a> </div>
        <div class="col "> <a href="#" class="btn btn-dark btn-lg shadow">Share a Post</a> </div>
        <div class="col "> <a href="#" class="btn btn-light bgn-lg shadow">Create an Event</a> </div>

    </div>
</section>

<section class="p-5 ">
    <div class="container p-5">
        <div class="d-flex align-items-center justify-content-between">
            <div class="p-3">
                <h3 class="lead">View Active Posts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet error distinctio, dolorem illum possimus quis.</p>
            </div>
            <img src="../svg/undraw_post_re_mtr4.svg" alt="">
        </div>
    </div>
</section>

<section class="p-5 mt-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="display-6">QUICK POST</h3>
            </div>
            <div class="col">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" placeholder="Quick post" name="quick post" id="" class="form-control form-control-lg">
                        <button type="submit" name="submit" class="btn btn-success"> <i class="fas fa-check    "></i> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<section class="p-5 ">
    <div class="container p-5">
        <div class="row text-center">
            <div class="col">
                <div class="card w-75 shadow">
                    <div class="card-body">
                        <p class="lead">
                            Active Post
                            <p class="fw-bold fs-1 text-center">51</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-75 shadow">
                    <div class="card-body">
                        <p class="lead">
                            Active Announcements
                            <p class="fw-bold fs-1 text-center">51</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-75 shadow">
                    <div class="card-body">
                        <p class="lead">
                            Active Threads
                        </p>
                        <p class="fw-bold fs-1 text-center">51</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<?php include '../html/foot.html' ?>
<?php 
include '../html/head.html'; 
include '../functions/admin-logic.php';

?>

<div class="container-fluid">
    <?php include 'navbar-admin.php'; 
    if(isset($_POST['post'])){
        $post = $_POST['text-area'];
        $type = $_POST['type'];
        $id = 1;
      
        add_post($post,$type,$id);


    }


    ?>
</div>

<section class="p-5 bg-light">
    <a href="<?php echo $previous ?>" class="btn btn-secondary"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
    <div class="container">
        <h1 class="display-6 text-center">Create a post</h1>
        <div class="card mt-5 w-50 shadow mx-auto">
            <div class="card-body">
                <form action="" method="post">
                    <textarea name="text-area" id="" placeholder="Add a post" cols="30" rows="10" class="form-control"></textarea>
                    
                        <button class="btn btn-dark mt-3 float-end btn-lg" type="submit" name="post">Post</button>
                   <select name="type" id="" class="form-select w-50 form-select-lg mt-3">
                       <option value="" hidden selected disabled>Post type</option>
                       <option value="ANNOUNCEMENT">Announcement</option>
                       <option value="EVENT">Event</option>
                   </select>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include '../html/foot.html'; ?>
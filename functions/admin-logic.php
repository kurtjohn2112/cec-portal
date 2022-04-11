<?php 
include 'connection.php';


function add_post($post,$type,$id){
    $conn = connect();
    $sql = "INSERT INTO posts (post,type,admin_id)VALUES('$post','$type','$id')";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show mt-3 container" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Posted Successfully</strong> 
        </div>';
             
        
    }else{
        die("ERROR: ". $conn->error);
    }
}

function register($firstname,$lastname,$username,$password){
    $conn = connect();
    $sql = "INSERT INTO users(firstname,lastname,username,password)VALUES('$firstname','$lastname','$username','$password')";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show mt-3 container" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Registered Successfully, Proceed to Login <a href="login.php" class="text-decoration-none">Page</a></strong> 
        </div>';
             
        
    }else{
        die("ERROR: ". $conn->error);
    }

}

function login($username, $password){
    $conn = connect();
    $sql  = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if($result){
        $row = $result->fetch_assoc();
        if($row['role'] == 'S'){
            header('location:student-views/');
        }else{
            header('location:admin-views/');
        }
    }

}

?>
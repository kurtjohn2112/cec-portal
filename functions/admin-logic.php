<?php 
include 'connection.php';


function show($table_name){
    $conn = connect();
    $sql = "SELECT  * FROM $table_name ORDER BY id DESC";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
       $rows = array();
       while($row  = $result->fetch_assoc()){
           $rows[] = $row;
       }
       return $rows;
    }else{
        return FALSE;
    }

}
function destroy($id,$pk,$table_name){
    $conn = connect();
    $sql = "DELETE FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      
    }


}
function show_data($table_name,$pk,$id){
    $conn = connect();
    $sql = "SELECT * FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        return $result->fetch_assoc();
      
    }

}

function upload_img($img_name,$img_src_id,$label){
    $conn = connect();
    $sql = "INSERT INTO images(img_name,img_src_id,label)VALUES('$img_name','$img_src_id','$label')";
    $result = $conn->query($sql);

    if($result == TRUE){
      return 1;
      
    }else{
        die('ERROR: '.$conn->error);
    }

}

function show_uploaded_images($id,$label){
    $conn = connect();
    $sql = "SELECT * FROM images WHERE img_src_id = '$id' AND label  = '$label'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $rows = array();
        while($row  = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
     }else{
         return FALSE;
     }
    
    

}

function show_data_multiple($table_name,$pk,$id){
    $conn = connect();
    $sql = "SELECT * FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $rows = array();
        while($row  = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
     }else{
         return FALSE;
     }
}
#------------------ admin query


function add_post($post,$type,$id,$date){

   
    $conn = connect();
    $sql = "INSERT INTO posts (post,type,admin_id,date_posted)VALUES('$post','$type','$id','$date')";
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

function register($firstname,$lastname,$username,$password,$section,$year){
    $conn = connect();
    $sql = "INSERT INTO users(firstname,lastname,username,password,section,year)VALUES('$firstname','$lastname','$username','$password','$section','$year')";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show mt-3 container" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Registered Successfully</strong> 
        </div>';
             
        
    }else{
        die("ERROR: ". $conn->error);
    }

}

function login($username, $password){
    $conn = connect();
    $sql  = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['fullname'] = $row['firstname']." ".$row['lastname'];
        $_SESSION['section'] = $row['section'];
        $_SESSION['year'] = $row['year'];
        $_SESSION['id'] = $row['id'];
        if($row['role'] == 'S'){
            header('location:student-views/');
        }else{
            header('location:admin-views/');
        }
    }else{
       die("ERROR: ".$conn->error);
    }

}

function add_section($section_name){
    $conn = connect();
    $sql = "INSERT INTO sections (section)VALUES('$section_name')";
    $result = $conn->query($sql);

    
}
function add_subject($sub_name){
    $conn = connect();
    $sql = "INSERT INTO subjects (name)VALUES('$sub_name')";
    $result = $conn->query($sql);

    
}
function add_grade($id,$grade,$sub,$sem){
    $conn = connect();
    $sql = "INSERT INTO grades (std_id,grade,subject,semester)VALUES('$id','$grade','$sub','$sem')";
    $result = $conn->query($sql);

    header('Location: '.$_SERVER['REQUEST_URI']);

    
}

function show_week_date()
{
    $dt = new DateTime();
    $dates = [];
    for ($d = 1; $d <= 5; $d++) {
        $dt->setISODate($dt->format('o'), $dt->format('W'), $d);
        $dates[$dt->format('D')] = $dt->format('Y-m-d');
    }
    return $dates;
}


function create_teacher($firstname,$lastname,$username,$password){
    $conn = connect();
    $sql = "INSERT INTO teachers(fname,lname,username,password)VALUES('$firstname','$lastname','$username','$password')";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show mt-3 container" role="alert">
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <strong>Registered Successfully</strong> 
        </div>';
             
        
    }else{
        die("ERROR: ". $conn->error);
    }

}
function teacher_login($username, $password){
    $conn = connect();
    $sql  = "SELECT * FROM teachers WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION['fullname'] = $row['fname']." ".$row['lname'];

        $_SESSION['id'] = $row['id'];
       
            header('location:teacher-views/dash-teacher.php');
        
    }else{
       die("ERROR: ".$conn->error);
    }

}

?>
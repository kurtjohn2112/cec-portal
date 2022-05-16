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
#---------------------------------------------------------------------------------------

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

?>
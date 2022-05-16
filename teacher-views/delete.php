<?php 
include '../functions/admin-logic.php';

if(isset($_GET['section_id'])){
    destroy($_GET['section_id'],'id','sections');
}
if(isset($_GET['sub_id'])){
    destroy($_GET['sub_id'],'id','subjects');
}





?>
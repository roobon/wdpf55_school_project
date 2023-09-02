<?php 

require_once("includes/db_config.php");

$id = $_GET['stid'];

$db->query("DELETE FROM students WHERE id = '$id'");

if($db->affected_rows>0){
    session_start();
    $_SESSION['msg'] = "Deleted Successfullly";
    header("Location:student_list.php");
    
}


?>
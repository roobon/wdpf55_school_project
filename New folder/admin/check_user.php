<?php 

if(isset($_POST['submit'])){
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $password = sha1($password);
    require_once("includes/db_config.php");

    $result = $db->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

    session_start();
    
    if($result->num_rows==1){
        $_SESSION['email'] = $email;
        header("Location:admin_home.php");
    } else {
       $_SESSION['msg'] = "Wrong Credentials. Try with correct one";
       header("Location:index.php");
    }

}

?>
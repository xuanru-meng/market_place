<?php 
    session_start();

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        exit();
        
    }

?>


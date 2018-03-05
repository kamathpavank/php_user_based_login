<?php
    session_start();
    if (isset($_SESSION['username'])){
        unset($_SESSION['username']);
        unset($_SESSION['credentials']);
        unset($_SESSION['access_levels']);      
        header('Location:index.php');
    }
 ?>

<?php
    session_start();
    if (isset($_SESSION['username'])){
        unset($_SESSION['username']);
        unset($_SESSION['credentials']);
      
        header('Location:login.php');
    }
 ?>

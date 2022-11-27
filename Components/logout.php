<?php
  session_start();
  if((!empty($_SESSION['email'])) || (!empty($_SESSION['phone']))){
    echo "<script> alert('please input email or Phone Number before logging out!');</script>";
  }
  session_destroy();
  header("Location: ../login.php");
?>
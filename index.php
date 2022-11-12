<?php
  session_start();

  if(isset($_SESSION['user'])){
    header("location: admin/dashboard.php");
  } else {
    header("location: login.php");
  }
?>
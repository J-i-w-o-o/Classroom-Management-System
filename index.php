<?php
  session_start();

  if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    header("location: admin/dashboard.php");
  } else if(isset($_SESSION['role']) && $_SESSION['role'] == 'instructor'){
    header("location: admin/dashboard.php");
  } else if(isset($_SESSION['role']) && $_SESSION['role'] == 'student'){
    header("location: admin/dashboard.php");
  } 
  else {
    header("location: login.php");
  }
?>
<?php
  if (isset($_POST['submit'])) {
    $password = $_POST['password'];

    $res = $con->query("SELECT password FROM users WHERE school_id='$school_id'");
    $row = $res->fetch_assoc();
    $DBhashedPassword = $row['password'] ?? null;

    if (password_verify($password, $DBhashedPassword)) {
      // login success!
      $res = $con->query("SELECT * FROM users WHERE school_id='$school_id'");
      $row = $res->fetch_assoc();
      $_SESSION['user'] = 1;
      $_SESSION['school_id'] = $row['school_id'];
      $_SESSION['first_name'] = $row['first_name'];
      $_SESSION['last_name'] = $row['last_name'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['phone'] = $row['phone'];
      

      if($row['role']=='admin'){
        header("Location: ./admin/dashboard.php");
      }
      else if($row['role']=='student'){
        header("Location: ./student/dashboard.php");
      }
      else if($row['role']=='instructor'){
        header("Location: ./instructor/dashboard.php");
      }
      else {
        header("Location: ./login.php?");
      }
      
    } 
    else {
      header("Location: ./login.php?error= Incorrect Username or Password");
    }
    


  }
  ?>
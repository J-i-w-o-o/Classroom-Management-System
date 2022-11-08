<?php
session_start();
include('./Components/Database.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./main-css/login.css">
  <title>LOGIN</title>
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" name="schoolID" required>
        <span></span>
        <label>School ID</label>
      </div>
      <div class="txt_field">
        <input type="password" name="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login" name="submit">
      <div class="signup_link">
        Don't have an account?<a href="#">Send an Email</a>

    </form>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    $school_id = $_POST['schoolID'];
    $password = $_POST['password'];

    $res = $con->query("SELECT password FROM users WHERE school_id='$school_id'");
    $row = $res->fetch_assoc();
    $DBhashedPassword = $row['password'];

    if(password_verify($password, $DBhashedPassword)){
      // login success!
      $res = $con->query("SELECT * FROM users WHERE school_id='$school_id'");
      $row = $res->fetch_assoc();
      $_SESSION['user'] = 1;
      $_SESSION['school_id'] = $row['school_id'];
      $_SESSION['first_name'] = $row['first_name'];
      $_SESSION['last_name'] = $row['last_name'];
      $_SESSION['age'] = $row['age'];
      $_SESSION['address'] = $row['address'];
      $_SESSION['role'] = $row['role'];

      header("Location: Navigation-bar.php");
    } else {
      echo 'school id and password doesn\'t match';
    }
  }
  ?>
</body>

</html>
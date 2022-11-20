<?php
session_start();
require('./Components/Database.php');
require('./Components/Bootstrap.php');
require('./Components/LoginChecker.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>LOGIN</title>
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form method="post">
      <?php
      if (isset($_GET['error'])){ ?>
      
        <div class="alert alert-danger" role="alert">
          
       <?=$_GET['error']?>
      </div>
        <?php } ?>
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

</body>

</html>
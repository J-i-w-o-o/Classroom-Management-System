<?php 
session_start();
include('./Components/Database.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./main-css/login.css">
  <title>Document</title>
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form method="post">
      <div class="txt_field">
        <input type="text" name="user" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="pass" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot Password?</div>
      <input type="submit" value="Login" name="submit">
    <!--  <div class="signup_link">
        Don't have an account?<a href="#">Send an Email</a>
      </div>-->
    </form>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $res = $con->query("SELECT * FROM user WHERE user='$user' AND pass='$pass'");
    $row = $res->fetch_assoc();
    $DBuser = $row['user'] ?? null;
    $DBpass = $row['pass'] ?? null;

    if ($user == $DBuser && $pass == $DBpass) {
      $_SESSION['user'] = $row['user'];
      $_SESSION['pass'] = $row['pass'];
      header("Location:./Components/Navigation-bar.php");
    } else if (!$user == $DBuser && !$pass == $DBpass) {
      echo "Wrong User/Password. Please Try Again" . '<br><br>';
      session_destroy();
    }
  }
  $result = $con->query("SELECT * FROM user");
  echo "list: <br>";
  foreach ($result as $key) {
    echo $key['id'] . $key['user'] . $key['pass'] . $key['role'] . '<br>';
  }

  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - Name: " . $row["user"] . " " . $row["pass"] . "<br>";
  }
  ?>
</body>

</html>
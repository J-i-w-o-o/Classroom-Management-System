<?php 
session_start();
include('./Database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form method="post">
    <input type="text" name="user" placeholder="user">
    <input type="password" name="pass" placeholder="password">
    <input type="submit" name="submit" value="login">
  </form>
</body>
</html>
<?php
  if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $res = $con -> query("SELECT * FROM user WHERE user='$user' AND pass='$pass'");
    $row = $res -> fetch_assoc();
    $DBuser = $row['user'] ?? null;
    $DBpass = $row['pass'] ?? null;

    if($user == $DBuser && $pass == $DBpass){
      $_SESSION['user'] = $row['user'];
      $_SESSION['pass'] = $row['pass'];
      header("Location: dashboard.php");
    }
    else if(!$user == $DBuser && !$pass == $DBpass) {
      echo "Wrong User/Password. Please Try Again".'<br><br>';
      session_destroy();
    }
  }
  $result = $con -> query("SELECT * FROM user");
  echo "list: <br>";
  foreach($result as $key){
    echo $key['id'] . $key['user'] . $key['pass'] . $key['role'] . '<br>';
  }
  
  while($row = $result -> fetch_assoc()){
    echo "id: " . $row["id"]. " - Name: " . $row["user"]. " " . $row["pass"]. "<br>";
  }
?>
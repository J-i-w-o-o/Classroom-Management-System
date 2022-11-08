

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" action="logout.php">
    <input type="submit" name="logout" value="logout">
    <p>//Sa Navigation-bar.php nakalagay ang Logout Button</p>
  </form>
</body>
</html>

<?php
  session_start();
  if(isset($_SESSION['user'])){
    echo "dashboard.php"."</br>";
    echo $_SESSION['user'];
  }
  else {
    echo "login first";
    header("location: /db/");
  }

?>
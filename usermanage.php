<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="text" name="schoolID" id="" placeholder="school id">
    <input type="text" name="firstName" id="" placeholder="first">
    <input type="text" name="lastName" id="" placeholder="lastname">
    <input type="password" name="password" id="" placeholder="password">
    <input type="text" name="age" id="" placeholder="age">
    <input type="text" name="address" id="" placeholder="address">
    <select name="role" id="">
      <option value="student">Student</option>
      <option value="teacher">Teacher</option>
      <option value="admin">Admin</option>
    </select>
    <input type="submit" name="submit" value="ADD USER">
  </form>
</body>
</html>


<?php
  require('./Components/Database.php');

  if(isset($_POST['submit'])){
    $school_id = $_POST['schoolID'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    $options = [
      'cost' => 10,
    ];

    $hashedpassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $sql = "INSERT INTO `users`(`school_id`, `first_name`, `last_name`, `password`, `age`, `address`, `role`) 
    VALUES ('$school_id', '$first_name', '$last_name', '$hashedpassword', '$age', '$address', '$role')";

    $res = $con->query($sql);
    

  }

  

?>
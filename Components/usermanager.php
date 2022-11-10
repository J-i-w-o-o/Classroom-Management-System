
<?php
  require('Database.php');

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
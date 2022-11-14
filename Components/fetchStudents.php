<?php
  include '../Components/Database.php';
  
  $students = $con->query("SELECT * FROM students WHERE status=1");

?>
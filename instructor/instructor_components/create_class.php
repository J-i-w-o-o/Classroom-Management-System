<?php
session_start();
require '../../Components/Database.php';
echo "Loading.....";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
  
  if(isset($_POST['classSubmit'])){
    $subjectCode = $_POST['subjectcode'];
    $section = $_POST['section'];
    $sql = "SELECT * FROM classes WHERE subject_code='$subjectCode' AND section='$section'";
    $res = $con->query($sql);
    $row = $res->fetch_assoc();
    if($res->num_rows > 0) {
      //may kapareho ibig sabhin bawal na
      echo 'bawal na';
    } else {
      $classCode = $subjectCode . "-" . randString(6);
      $sql = "INSERT INTO classes(class_code, section, subject_code, school_id) VALUES ('$classCode', '$section', '$subjectCode', '" . $_SESSION['school_id'] . "')";
      $con->query($sql);
      echo "Class Created!";
    }
  }
}

function randString($length) {
  $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $char = str_shuffle($char);
  for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
      $rand .= $char[mt_rand(0, $l)];
  }
  return $rand;
}
header("location: ../myClass.php");

?>
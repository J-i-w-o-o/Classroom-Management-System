<?php
  $con = mysqli_connect("localhost", "root", "", "api");

  if(mysqli_connect_errno()){
    throw new Error("Php mysql connection err: ".mysqli_connect_error());
  } 

?>
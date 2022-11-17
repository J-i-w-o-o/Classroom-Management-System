<?php
  include '../../Components/Database.php';
  $role = isset($_GET['role']) ? $_GET['role'] : null;
  $action = isset($_GET['action']) ? $_GET['action'] : null;
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if($role == 'student'){
    switch($action){
      case 'edit':
        break;
      case 'delete':
        $res = $con->query("UPDATE students SET status=0 WHERE id='$id'");
        if($res) header("refresh:0.5; ../studentManage.php");
        break;
    }
  }
  else if($role == 'teacher'){
    switch($action){
      case 'edit':
        break;
      case 'delete':
        
        break;
    }
  }
  
?>
<?php
  $role = isset($_GET['role']) ? $_GET['role'] : null;
  $action = isset($_GET['action']) ? $_GET['action'] : null;
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if($role == null || $action == null || $id == null) return;

  $res = null;

  if($role == 'student'){
    switch($action){
      case 'edit':
        break;
      case 'delete':
        $res = $con->query("UPDATE students SET status=0 WHERE id='$id'");
        if($res) header("location: studentManage.php?");
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
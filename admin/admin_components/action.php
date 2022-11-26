<?php
  include '../../Components/Database.php';
  $role = isset($_GET['role']) ? $_GET['role'] : null;
  $action = isset($_GET['action']) ? $_GET['action'] : null;
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if($role == 'student'){
    switch($action){
      case 'edit':
        $res = $con->query("SELECT * FROM students WHERE id='$id'");
        $row = $res->fetch_assoc();
        if($row){
          header(
            "location: ../studentEdit.php?id=".$row['id'].
            "&school_id=".$row['school_id'].
            "&first_name=".$row['first_name'].
            "&last_name=".$row['last_name'].
            "&section=".$row['section']
          );
        }
        break;
      case 'delete':
        $res = $con->query("UPDATE students SET status=0 WHERE id='$id'");
        if($res) header("refresh:0.3; ../studentManage.php");
        else {
          mysqli_error($con);
          header("refresh:2; ../studentManage.php");
        }
        break;
    }
  }
  else if($role == 'instructor'){
    switch($action){
      case 'edit':
        $res = $con->query("SELECT * FROM instructors WHERE id='$id'");
        $row = $res->fetch_assoc();
        if($row){
          header(
            "location: ../instructorEdit.php?id=".$row['id'].
            "&school_id=".$row['school_id'].
            "&first_name=".$row['first_name'].
            "&last_name=".$row['last_name']
          );
        }
        break;
      case 'delete':
        $res = $con->query("UPDATE instructors SET status=0 WHERE id='$id'");
        if($res) header("refresh:0.3; ../instructorManage.php");
        else {
          mysqli_error($con);
          header("refresh:2; ../instructorManage.php");
        }
        break;
    }
  }
  else if($role == 'admin'){
    switch($action){
      case 'edit':
        $res = $con->query("SELECT * FROM admins WHERE id='$id'");
        $row = $res->fetch_assoc();
        if($row){
          header(
            "location: ../adminEdit.php?id=".$row['id'].
            "&school_id=".$row['school_id'].
            "&first_name=".$row['first_name'].
            "&last_name=".$row['last_name']
          );
        }
        break;
      case 'delete':
        $res = $con->query("UPDATE admins SET status=0 WHERE id='$id'");
        if($res) header("refresh:0.3; ../adminManage.php");
        else {
          mysqli_error($con);
          header("refresh:2; ../adminManage.php");
        }
        break;
    }
  }
  else if($role == 'subject'){
    switch($action){
      case 'edit':
        $res = $con->query("SELECT * FROM subjects WHERE id='$id'");
        $row = $res->fetch_assoc();
        if($row){
          header(
            "location: ../subjectEdit.php?id=".$row['id'].
            "&subject=".$row['subject'].
            "&subject_code=".$row['subject_code'].
            "&course=".$row['course']
          );
        }
        break;
      case 'delete':
        $res = $con->query("DELETE FROM `subjects` WHERE id='$id'");
        if($res) header("refresh:0.3; ../subjectManage.php");
        else {
          mysqli_error($con);
          header("refresh:2; ../subjectManage.php");
        }
        break;
    }
  }
  else if($role == 'section'){
    switch($action){
      case 'edit':
        $res = $con->query("SELECT * FROM sections WHERE id='$id'");
        $row = $res->fetch_assoc();
        if($row){
          header(
            "location: ../sectionEdit.php?id=".$row['id'].
            "&course=".$row['course'].
            "&section=".$row['section']
          );
        }
        break;
      case 'delete':
        $res = $con->query("DELETE FROM `sections` WHERE id='$id'");
        if($res) header("refresh:0.3; ../sectionEdit.php");
        else {
          mysqli_error($con);
          header("refresh:2; ../sectionEdit.php");
        }
        break;
    }
  }
  
?>
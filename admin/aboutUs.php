<?php
  require('includes/Header.php');
if (isset($_SESSION['user'])) {

} else {
  header("location: ../login.php");
}
?>

<link rel="stylesheet" href="../main-css/aboutUs.css">

<div class="x--main-container">
  <div class="container-fluid">

  <div class="d-flex flex-column pt-4 px-5">
    <div class="p-4 text-center bg-light fs-1 rounded-top">About Us</div>
    <div class="p-0 bg-light d-flex justify-content-evenly fs-4 align-items-center">
      <span class="align-items-center px-5">UCC Classroom was created to relieve students' academic burdens by providing a centralized platform for monitoring their tasks and tracking their class progress in a transparent manner by displaying rubrics alongside student work. Set and schedule activities, assignments, and quizzes across multiple classes.
      </span>
      <img src="../img/teacher.png" class="img-fluid mx-5" alt="Responsive image" width="270">
    </div>
    <div class="p-3 bg-light d-flex justify-content-evenly fs-4 align-items-center rounded-bottom">
      <img src="../img/student.png" class="img-fluid mx-5" width="250">
      <span class="align-items-center px-5">UCC Classroom was created to relieve students' academic burdens by providing a centralized platform for monitoring their tasks and tracking their class progress in a transparent manner by displaying rubrics alongside student work. Set and schedule activities, assignments, and quizzes across multiple classes.
      </span>
    </div>
  </div>

  </div>  
</div>

<?php
require('includes/Footer.php');
?>


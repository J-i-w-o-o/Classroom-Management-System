<?php

if (isset($_SESSION['user'])) {
  require('../Components/usermanager.php');
  require('HeadFooter/Header.php');
} else {
  header("location: ../login.php");
}

?>

  <div class="x--main-container">
    <div class="container-lg pt-5 px-1" id="containerForm"> 
      <form method="post" class="bg-light border border-primary rounded px-5"> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Add Users</h1>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="School ID" aria-label="SchoolID" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-5 px-1">
        <span class="input-group-text">First Name</span>
        <input type="text" aria-label="First name" placeholder="First Name" class="form-control">
       
        </div>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Last Name</span>
        <input type="text" aria-label="Last name" placeholder="Last Name" class="form-control">
        </div>

        <div class="input-group mb-5 px-1">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Age" aria-label="Age" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-5 px-1">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-home" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Address" aria-label="SchoolID" aria-describedby="basic-addon1">
        </div>

        <div class="px-1 pb-3">
        <select class="form-select" aria-label="Default select example">
          <option selected>Student</option>
          <option value="2">Teacher</option>
          <option value="3">Admin</option>
        </select>
        </div>

        <div class="d-flex justify-content-evenly py-2">
        <input type="submit" class="btn btn-success btn-lg mx-2" name="submit" value="Add User"></input>
        <input type="reset" class="btn btn-danger btn-lg mx-2" value="Clear"></input>
        </div>

      </form>
    </div>
  </div>

<?php
require('HeadFooter/Footer.php');
?>



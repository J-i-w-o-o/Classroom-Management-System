<?php
require('../Components/usermanager.php');

require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {
} else {
  header("location: login.php");
}
?>

  <div class="x--main-container">
    <div class="modal-container">

        <form method="post">

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="School ID" aria-label="SchoolID" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
        <span class="input-group-text">First and last name</span>
        <input type="text" aria-label="First name" class="form-control">
        <input type="text" aria-label="Last name" class="form-control">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"></span>
        <input type="text" class="form-control" placeholder="Age" aria-label="Age" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-home" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Address" aria-label="SchoolID" aria-describedby="basic-addon1">
        </div>

        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Type
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Student</a></li>
          <li><a class="dropdown-item" href="#">Teacher</a></li>
          <li><a class="dropdown-item" href="#">Admin</a></li>
        </ul>
        </div>

        <button type="button" class="btn btn-success">Add Student</button>

          <!-- <input type="text" name="schoolID" placeholder="school id">
          <input type="text" name="firstName"  placeholder="first">
          <input type="text" name="lastName" placeholder="lastname">
          <input type="password" name="password" placeholder="password">
          <input type="text" name="age" placeholder="age">
          <input type="text" name="address" placeholder="address">
          <select name="role">
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="admin">Admin</option>
          </select>
          <input type="submit" name="submit" value="ADD USER"> -->

        </form>
    </div>
  </div>
<?php
require('HeadFooter/Footer.php');
?>
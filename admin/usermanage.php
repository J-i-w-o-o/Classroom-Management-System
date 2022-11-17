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
        <span class="input-group-text">First and Last Name</span>
        <input type="text" aria-label="First name" class="form-control">
        <input type="text" aria-label="Last name" class="form-control">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Age" aria-label="Age" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-home" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Address" aria-label="SchoolID" aria-describedby="basic-addon1">
        </div>

        <select class="form-select" aria-label="Default select example">
          <option selected>Student</option>
          <option value="2">Teacher</option>
          <option value="3">Admin</option>
        </select>

        <br>
        <br>
        <br>

        <div class="d-flex justify-content-xxl-evenly">
        <input type="submit" class="btn btn-success btn-lg" name="submit" value="Add User"></input>
        <input type="submit" class="btn btn-danger btn-lg" name="submit" value="Clear"></input>
        </div>

      </form>
    </div>
  </div>

<?php
require('HeadFooter/Footer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <link rel="stylesheet" href="../main-css/userManage.css">

</head>
<body>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
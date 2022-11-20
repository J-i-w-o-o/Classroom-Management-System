<!-- Modal -->
<div class="modal fade" id="departmentModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="post" class="bg-light border border-primary rounded px-5">

        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Add Department</h1>
        <div class="input-group mb-5 px-1 pt-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Deparment" aria-label="SchoolID" aria-describedby="basic-addon1" name="department" required>
        </div>

        <div class="d-flex justify-content-evenly py-2 mb-4">
          <input type="submit" class="btn btn-success btn-lg mx-2" name="addingAdminSubmit" value="Add Department"></input>
          <input type="reset" class="btn btn-danger btn-lg mx-2" value="Clear"></input>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </form>

    </div>
  </div>
</div>

<?php
require '../Components/Database.php';
if (isset($_POST['addingAdminSubmit'])) {

  $department = $_POST['department'];

  $checkDepartment = mysqli_query($con, "SELECT *  FROM departments where department = '$department' ");
  if (mysqli_num_rows($checkDepartment)) { ?>
     <div class="alert alert-danger text-center mx-5" role="alert">Department Already Exist!
    <button type="button" class="btn-close btn-close-white" data-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    $checkSchoolID = null;
  } else {
    $res = $con->query("INSERT INTO `departments`(`department`) 
  VALUES ('$department')");
  }
}

?>
<!-- Modal -->
<div class="modal fade" id="sectionModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="post" class="bg-light border border-primary rounded px-5">

        <!-- ADD Subject MODAL -->
        <h1 class="text-center pt-2 mt-5 fw-bold fst-italic">Add Section</h1>
        <div class="input-group mb-5 px-1 pt-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Subject Name" aria-label="SchoolID" aria-describedby="basic-addon1" name="course" required>
          <input type="text" class="form-control" placeholder="Subject Code" aria-label="SchoolID" aria-describedby="basic-addon1" name="section" required>
        </div>

        <div class="d-flex justify-content-evenly py-2 mb-4">
          <input type="submit" class="btn btn-success btn-lg mx-2" name="addingSectionSubmit" value="Add Section"></input>
          <input type="reset" class="btn btn-danger btn-lg mx-2" value="Clear"></input>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </form>

    </div>
  </div>
</div>

<?php
require '../Components/Database.php';
if (isset($_POST['addingSectionSubmit'])) {

  $course = $_POST['course'];
  $section = $_POST['section'];

  $checkSectionCode = mysqli_query($con, "SELECT *  FROM sections where section = '$section'");
  if (mysqli_num_rows($checkSectionCode)) { ?>
     <div class="alert alert-danger text-center mx-5" role="alert">section Already Exist!
    <button type="button" class="btn-close btn-close-white" data-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    $checkSectionCode = null;
  } else {
    $res = $con->query("INSERT INTO `sections`(`course`, `section`) VALUES ('$course','$section')");
  }
}

?>

<!-- Modal -->
<div class="modal fade" id="deleteStudentModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <form method="post" class="bg-light border border-primary rounded px-5"> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Archive Student</h1>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="School ID" aria-label="SchoolID" aria-describedby="basic-addon1" value="" name="schoolID" required>
        </div>

        <div class="d-flex justify-content-evenly py-2 mb-4">
        <input type="submit" class="btn btn-danger btn-lg mx-2" name="onDelete" value="Archive"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </form> 

    </div>
  </div> 
</div>


<?php
  require '../Components/Database.php';
  if(isset($_POST['onDelete'])){
    $student_id = $_POST['schoolID'];

    $res = $con->query("UPDATE students SET status=0 WHERE student_id='$student_id'");
  }
  
?>
<!-- Modal -->
<div class="modal fade" id="addClassModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <form method="post" class="bg-light border border-primary rounded px-5"> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Add Class</h1>
       

        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Course</span>
        <input type="text" aria-label="Course" placeholder="Course Name" class="form-control" name="course" required>
       
        </div>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Section</span>
        <input type="text" aria-label="Section" placeholder="Section Name" class="form-control" name="section" required>
        </div>
        

        <div class="d-flex justify-content-evenly py-2 mb-4">
        <input type="submit" class="btn btn-success btn-lg mx-2" name="addingClassSubmit" value="Add Class"></input>
        <input type="reset" class="btn btn-danger btn-lg mx-2" value="Clear"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </form> 

    </div>
  </div> 
</div>

<?php
  require '../Components/Database.php';
  if(isset($_POST['addingClassSubmit'])){
    $course = $_POST['course'];
    $section = $_POST['section'];

    $res = $con->query("INSERT INTO `sections`(`course`, `section`) 
    VALUES ('$course','$section')");
  }
  
?>
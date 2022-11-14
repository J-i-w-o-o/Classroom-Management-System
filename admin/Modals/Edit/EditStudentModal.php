

<!-- Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <form method="post" class="bg-light border border-primary rounded px-5"> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Edit Student</h1>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="School ID" aria-label="SchoolID" aria-describedby="basic-addon1" name="schoolID" required>
        </div>

        <div class="input-group mb-5 px-1">
        <span class="input-group-text">First Name</span>
        <input type="text" aria-label="Firstname" placeholder="First Name" class="form-control" name="firstName" required>
       
        </div>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Last Name</span>
        <input type="text" aria-label="Lastname" placeholder="Last Name" class="form-control" name="lastName" required>
        </div>

        <!-- SECTION IS DROP DOWN -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSection">Section</label>
          </div>
          <select name="section" id="inputGroupSection" class="custom-select">
          <?php
            
            $sections = $con->query("SELECT * FROM sections");
            if($sections->num_rows > 0){
              while($row = $sections->fetch_assoc()){?>
                <option value="<?php echo $row['course']."-".$row['section']?>" name="section"><?php echo $row['course']."-".$row['section']?></option>
              <?php
              }
            } else {?>
              <option value="" name="section">no section records</option>
            <?php
            }
          ?>
          </select>
        </div>
        

        <div class="d-flex justify-content-evenly py-2 mb-4">
        <input type="submit" class="btn btn-success btn-lg mx-2" name="editStudentSubmit" value="Add User"></input>
        <input type="reset" class="btn btn-danger btn-lg mx-2" value="Clear"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </form> 

    </div>
  </div> 
</div>

<?php
  require '../Components/Database.php';
  if(isset($_POST['editStudentSubmit'])){
    
  }
  
?>
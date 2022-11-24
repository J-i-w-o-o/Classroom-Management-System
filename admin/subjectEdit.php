<?php
require('includes/Header.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;
$school_id = isset($_GET['school_id']) ? $_GET['school_id'] : null;
$first_name = isset($_GET['first_name']) ? $_GET['first_name'] : null;
$last_name = isset($_GET['last_name']) ? $_GET['last_name'] : null;
$section = isset($_GET['section']) ? $_GET['section'] : null;

if(!$id || !$school_id || !$first_name || !$last_name || !$section) 
  echo '<script>alert("Invalid Parameter"); window.location.href="studentManage.php"</script>';

?>
<div class="x--main-container">
  <!-- Modal -->
  <div class="container pt-5"> 
<div class="modal-container-fluid d-flex justify-content-center">
  <div class="modal-dialog" role="document">
    <div class="modal-content d-flex justify-content-center">
      
      <form method="post" class="bg-light border border-primary rounded px-5 "> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Edit Student</h1>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
        <input value="<?php echo $school_id ?>" type="text" class="form-control" placeholder="School ID" aria-label="SchoolID" aria-describedby="basic-addon1" name="school_id" required>
        </div>

        <div class="input-group mb-5 px-1">
        <span class="input-group-text">First Name</span>
        <input value="<?php echo $first_name ?>" type="text" aria-label="Firstname" placeholder="First Name" class="form-control" name="first_name" required>
       
        </div>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Last Name</span>
        <input value="<?php echo $last_name ?>" type="text" aria-label="Lastname" placeholder="Last Name" class="form-control" name="last_name" required>
        
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
        

        <div class="d-flex justify-content-center py-2 mb-4">
          <input type="submit" name="submitEdit" class="btn btn-primary btn-lg mx-2" value="Edit"></input>
          <a href="studentManage.php" ><input type="button" class="btn btn-danger btn-lg mx-2"  value="Close"></input></a>
        </div>
        
      </form> 
      <?php
          if(isset($_POST['submitEdit'])){
            $school_id = $_POST['school_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $section = $_POST['section'];

            $res = $con->query("UPDATE students SET 
              school_id='$school_id', 
              first_name='$first_name', 
              last_name='$last_name', 
              section='$section'
              WHERE id='$id'"
            );
            echo '<script>window.location.href="studentManage.php"</script>';
          }
        ?>
    </div>
  </div> 
</div>
  </div>
</div>

<?php
require('includes/Footer.php');
?>
<?php
require('includes/Header.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;
$school_id = isset($_GET['school_id']) ? $_GET['school_id'] : null;
$first_name = isset($_GET['first_name']) ? $_GET['first_name'] : null;
$last_name = isset($_GET['last_name']) ? $_GET['last_name'] : null;

if(!$id || !$school_id || !$first_name || !$last_name) 
  echo '<script>alert("Invalid Parameter"); window.location.href="adminManage.php"</script>';

?>
<div class="x--main-container">
  <!-- Modal -->
  <div class="container pt-5"> 
<div class="modal-container-fluid d-flex justify-content-center">
  <div class="modal-dialog" role="document">
    <div class="modal-content d-flex justify-content-center">
      
      <form method="post" class="bg-light border border-primary rounded px-5 "> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Edit Admin</h1>
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
        

        <div class="d-flex justify-content-center py-2 mb-4">
          <input type="submit" name="submitEdit" class="btn btn-primary btn-lg mx-2" value="Edit"></input>
          <a href="adminManage.php" ><input type="button" class="btn btn-danger btn-lg mx-2"  value="Close"></input></a>
        </div>
        
      </form> 
      <?php
          if(isset($_POST['submitEdit'])){
            $school_id = $_POST['school_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];

            $res = $con->query("UPDATE admins SET 
              school_id='$school_id', 
              first_name='$first_name', 
              last_name='$last_name'
              WHERE id='$id'"
            );
            echo '<script>window.location.href="adminManage.php"</script>';
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
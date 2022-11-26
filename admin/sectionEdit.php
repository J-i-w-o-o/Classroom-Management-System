<?php
require('includes/Header.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;
$course = isset($_GET['course']) ? $_GET['course'] : null;
$section = isset($_GET['section']) ? $_GET['section'] : null;

if(!$id || !$course || !$section) 
  echo '<script>window.location.href="sectionManage.php"</script>';

?>
<div class="x--main-container">
  <!-- Modal -->
  <div class="container pt-5"> 
<div class="modal-container-fluid d-flex justify-content-center">
  <div class="modal-dialog" role="document">
    <div class="modal-content d-flex justify-content-center">
      
      <form method="post" class="bg-light border border-primary rounded px-5 "> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Edit Section</h1>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Course</span>
        <input value="<?php echo $course ?>" type="text" aria-label="course" placeholder="COURSE" class="form-control" name="course" required>
       
        </div>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Section</span>
        <input value="<?php echo $section ?>" type="text" aria-label="Section" placeholder="Section" class="form-control" name="section" required>
        
        </div>

        <div class="d-flex justify-content-center py-2 mb-4">
          <input type="submit" name="submitEdit" class="btn btn-primary btn-lg mx-2" value="Edit"></input>
          <a href="sectionManage.php" ><input type="button" class="btn btn-danger btn-lg mx-2"  value="Close"></input></a>
        </div>
        
      </form> 
      <?php
          if(isset($_POST['submitEdit'])){
            $course = $_POST['course'];
            $section = $_POST['section'];

            $res = $con->query("UPDATE sections SET 
              course='$course', 
              section='$section'
              WHERE id='$id'"
            );
            echo '<script>window.location.href="sectionManage.php"</script>';
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
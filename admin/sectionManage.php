<?php
  require('../Components/usermanager.php');
  require('includes/Header.php');
if (isset($_SESSION['user'])) {

} else {
  header("location: ../login.php");
}
$targetid = null;
?>


<div class="x--main-container">

<!-- modal imports -->
<?php
  require './Modals/Add/AddSectionModal.php';

?>

<div class="container pt-4 "> 
    <div class="container-lg p-2 bg-white rounded">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addClassModal">
      Add Class
    </button>
    <table id="tableView" class="display responsive  compact table table-striped" width="100%">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-start">COURSE</th>
            <th class="text-center">SECTION</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        
        <tbody>
          <?php 
            include '../Components/Database.php';
            $sections = $con->query("SELECT * FROM sections");
            if($sections->num_rows > 0) {
              while($row = $sections->fetch_assoc()){?>

                <tr>
                  <td class="text-center  align-middle"><?php echo $row['id'] ?></td>
                  <td class="text-start  align-middle"><?php echo $row['course'] ?></td>
                  <td class="text-center  align-middle"><?php echo $row['section'] ?></td>
                  <td class="text-center  align-middle">
                    <button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#editStudentModal" >
                        Edit
                        <i class="fa-solid fa-pen-to-square h5"></i>
                    </button>
                    <!-- Button trigger modal -->
                    <button  type="button" class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteStudentModal" >
                        Delete
                      <i class="fa fa-trash h5" aria-hidden="true"></i>
                    </button>
                  </td>
                </tr>
              <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
</div>


</div>



<?php
require('includes/Footer.php');
?>

<?php
  require('../Components/usermanager.php');
  require('includes/Header.php');
?>

  <div class="x--main-container">

    <!-- modal imports -->
    <?php 
      require './Modals/Add/AddSubjectModal.php';// Add Student Modal Pop-up
    ?>
  <div class="container pt-4 "> 
    <div class="container-lg p-2 bg-white rounded">
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#subjectModal">
      Add Subject
    </button>
    <table id="tableView" class="display responsive  compact table table-striped" width="100%">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Subject</th>
            <th class="text-center">Subject Code</th>
            <th class="text-center">Course</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php 

            $subject = $con->query("SELECT * FROM subjects");
            if($subject->num_rows > 0) {
              while($row = $subject->fetch_assoc()){?>

                <tr>
                <td class="text-center  align-middle"><?php echo $row['id'] ?></td>
                  <td class="text-start  align-middle"><?php echo $row['subject'] ?></td>
                  <td class="text-center  align-middle"><?php echo $row['subject_code'] ?></td>
                  <td class="text-center  align-middle"><?php echo $row['course'] ?></td>
                  <td class="text-center  align-middle">
                    <a href="admin_components/action.php?role=subject&action=edit&id1=<?php echo $row['id'] ?>">
                    <button type="submit" class="btn btn-primary mx-1">
                        Edit
                        <i class="fa-solid fa-pen-to-square h5"></i>
                    </button>
                    </a>
                    
                    <!-- Button trigger modal -->
                    
                    <a href="admin_components/action.php?role=subject&action=delete&id1=<?php echo $row['id'] ?>" class="text-white text-decoration-none">
                      <button type="submit" class="btn btn-danger mx-1">Delete
                        <i class="fa fa-trash h5" aria-hidden="true"></i>
                      </button>
                    </a>
                    
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

    <!-- <div class="container-lg pt-5 px-1" id="containerForm"> 
      
    </div> -->
  </div>

<?php
require('includes/Footer.php');
?>



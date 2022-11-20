<?php
  require('../Components/usermanager.php');
  require('includes/Header.php');
?>

  <div class="x--main-container">

    <!-- modal imports -->
    <?php 
      require './Modals/Add/AddDepartmentModal.php';// Add Student Modal Pop-up
    ?>
  <div class="container pt-5 "> 
    <div class="container-lg p-2 bg-white rounded">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#departmentModal">
      Add Departments
    </button>
      <table
        id="table"
        data-show-columns="true"
        data-search="true"
        data-show-refresh="true"
        data-url=""
        data-mobile-responsive="true"
        data-check-on-init="true">
        <thead>
          <tr>
            <th data-field="id" data-sortable="true">ID</th>
            <th data-field="department" data-sortable="true">Department</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        
        <tbody>
          <?php 

            $department = $con->query("SELECT * FROM departments");
            if($department->num_rows > 0) {
              while($row = $department->fetch_assoc()){?>

                <tr>
                <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['department'] ?></td>
                  <td class="d-flex justify-content-center">
                    <a href="admin_components/action.php?role=department&action=edit&id=<?php echo $row['id'] ?>">
                    <button type="submit" class="btn btn-primary mx-1">
                        Edit
                        <i class="fa-solid fa-pen-to-square h5"></i>
                    </button>
                    </a>
                    
                    <!-- Button trigger modal -->
                    
                    <a href="admin_components/action.php?role=department&action=delete&id=<?php echo $row['id'] ?>" class="text-white text-decoration-none">
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



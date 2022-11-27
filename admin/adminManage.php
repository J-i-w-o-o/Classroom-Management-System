<?php
  require('../Components/usermanager.php');
  require('includes/Header.php');
?>

  <div class="x--main-container">

    <!-- modal imports -->
    <?php 
      require './Modals/Add/AddAdminModal.php';// Add Admin Modal Pop-up
    ?>
  <div class="container pt-4 text-end"> 
    <div class="container-lg p-4 bg-white rounded">
    <button type="button" class="btn btn-success d-self text-end mb-3 fs-6" data-toggle="modal" data-target="#adminModal">
    <i class="fa-solid fa-person-circle-plus"></i> Add Admin
    </button>
    <table id="tableView" class="display responsive  compact table table-striped" width="100%">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-start">Admin ID</th>
            <th class="text-center">NAME</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        
        <tbody>
          <?php 

            $admins = $con->query("SELECT * FROM admins WHERE status=1");
            if($admins->num_rows > 0) {
              while($row = $admins->fetch_assoc()){?>

                <tr>
                  <td class="text-center  align-middle"><?php echo $row['id'] ?></td>
                  <td class="text-start  align-middle"><?php echo $row['school_id'] ?></td>
                  <td class="text-center  align-middle"><?php echo $row['last_name'] . ', ' . $row['first_name'] ?></td>
                  <td class="text-center  align-middle">
                    <a href="admin_components/action.php?role=admin&action=edit&id=<?php echo $row['school_id'] ?>">
                    <button type="submit" class="btn btn-primary mx-1 ">
                        Edit
                        <i class="fa-solid fa-pen-to-square h5"></i>
                    </button>
                    </a>
                    
                    <!-- Button trigger modal -->
                    
                    <a href="admin_components/action.php?role=admin&action=delete&id=<?php echo $row['school_id'] ?>" class="text-white text-decoration-none">
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



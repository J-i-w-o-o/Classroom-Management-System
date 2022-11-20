<?php
  require('../Components/usermanager.php');
  require('includes/Header.php');
?>

  <div class="x--main-container">

    <!-- modal imports -->
    <?php 
      require './Modals/Add/AddAdminModal.php';// Add Student Modal Pop-up
    ?>
  <div class="container pt-5 "> 
    <div class="container-lg p-2 bg-white rounded">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#adminModal">
      Add Admin
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
            <th data-field="school_id" data-sortable="true">Admin ID</th>
            <th data-field="name" data-sortable="true">NAME</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        
        <tbody>
          <?php 

            $admins = $con->query("SELECT * FROM admins WHERE status=1");
            if($admins->num_rows > 0) {
              while($row = $admins->fetch_assoc()){?>

                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['school_id'] ?></td>
                  <td><?php echo $row['last_name'] . ', ' . $row['first_name'] ?></td>
                  <td class="d-flex justify-content-center">
                    <a href="admin_components/action.php?role=admin&action=edit&id=<?php echo $row['id'] ?>">
                    <button type="submit" class="btn btn-primary mx-1">
                        Edit
                        <i class="fa-solid fa-pen-to-square h5"></i>
                    </button>
                    </a>
                    
                    <!-- Button trigger modal -->
                    
                    <a href="admin_components/action.php?role=admin&action=delete&id=<?php echo $row['id'] ?>" class="text-white text-decoration-none">
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



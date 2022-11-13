<?php
require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {
} else {
  header("location: login.php");
}

require('../Components/Database.php');

?>

<div class="x--main-container">
  <div class="container-fluid">
    <div class="container bg-white">

    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Last Name</th>
          <th scope="col">First Name</th>
          <th scope="col">Age</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody id="users">
        <?php
        require('../Components/Database.php');
        
        $result = $con->query("SELECT * FROM users");
        while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['school_id']?></td>
          <td><?php echo $row['last_name']?></td>
          <td><?php echo $row['first_name']?></td>
          <td><?php echo $row['age']?></td>
          <td><?php echo $row['address']?></td>
          <td>
            <button
              type="button"
              class="btn btn-success editButton" 
              data-toggle="modal" 
              data-target="#exampleModal" 
              data-schoolid="school_id"
              data-firstname="first_name"
              data-lastname="last_name"
              data-age="age"
              data-address="address"> Edit 
            </button>
            <button
              type="button"
              class="btn btn-danger deleteButton" 
              data-toggle="modal" 
              data-target="#deleteModal" 
              data-schoolid="school_id"
              data-firstname="first_name"
              data-lastname="last_name"
              data-age="age"
              data-address="address"> Delete
            </button>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>

    </div>
  </div>
  
    <?php require('./Modals/EditModal.php') ?>

    <?php require('./Modals/DeleteModal.php') ?>

</div>



<?php
require('HeadFooter/Footer.php');
?>
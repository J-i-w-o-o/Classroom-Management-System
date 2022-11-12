<?php
require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {
} else {
  header("location: login.php");
}
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
      <tbody>
        <?php
        require('../Components/Database.php');

        $result = $con->query("SELECT * FROM users");
        function edit(){ echo '<script>alert("test")</script>'; }
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
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>

    </div>
  </div>
  
  

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
        <div class="modal-body">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">School Id:</label>
              <input type="text" class="form-control school-id-name" id="school-id-name" placeholder="School Id">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Last Name:</label>
              <input type="text" class="form-control last-name-name" id="last-name-name" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">First Name:</label>
              <input type="text" class="form-control first-name-name" id="first-name-name" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Age:</label>
              <input type="text" class="form-control age-name" id="age-name" placeholder="Age">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Address:</label>
              <textarea class="form-control address-name" id="address-name" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Edit</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Are you sure, You want to delete this User?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>


  <!-- <div class="container bg-white">
    <form method="post">
      <input type="text" name="" placeholder="School ID">
      <input type="text" name="" placeholder="First Name">
      <input type="text" name="" placeholder="Last Name">
      <input type="text" name="" placeholder="Age">
      <input type="text" name="" placeholder="Address">
      <input type="submit" name="submit" value="Edit">
    </form>
  </div> -->
</div>



<?php
require('HeadFooter/Footer.php');
?>
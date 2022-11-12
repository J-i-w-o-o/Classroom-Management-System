<?php 
  if(isset($_GET['school_id'])){
    $sId = $_GET['school_id'];
    $fname = $_GET['first_name'];
    $lname = $_GET['last_name'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $sql = "UPDATE users SET school_id='$sId', first_name='$fname', last_name='$lname', age='$age', address='$address' WHERE school_id='$sId'";
    $res = $con->query($sql);

  }
?>
<!-- Modal for Edit Users -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT MESSAGE</h5>
      </div>

      
        <div class="modal-body">
          <form method="get">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">School Id:</label>
              <input type="text" class="form-control school-id-name" id="school-id-name" placeholder="School Id" name="school_id">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Last Name:</label>
              <input type="text" class="form-control last-name-name" id="last-name-name" placeholder="Last Name" name="last_name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">First Name:</label>
              <input type="text" class="form-control first-name-name" id="first-name-name" placeholder="First Name" name="first_name">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Age:</label>
              <input type="text" class="form-control age-name" id="age-name" placeholder="Age" name="age">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Address:</label>
              <textarea class="form-control address-name" id="address-name" placeholder="Address" name="address"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-success" value="Edit" id="EditButton">
        </div>
      </form>

    </div>
  </div>
</div>
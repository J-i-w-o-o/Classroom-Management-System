<?php
  require('includes/Header.php');    
?>

<div class="x--main-container">

  <!-- CREATE CLASS MODAL -->
  <?php require './Modals/Add/CreateClassModal.php'; ?>

  <div class="container bg-white">
    
    <div class="container text-end pd-5">
      <button type="button" class="btn btn-success  mb-3 mt-2 fs-6" data-toggle="modal" data-target="#studentModal">
        <i class="fa-solid fa-plus"></i> Create Class
      </button>
    </div>

    <div class="pb-5">
      <h1 class="text-center">My Classes</h1>
      <div class="container ">
      <div class="row bg-light d-flex pb-3 shadow-sm rounded">
        <?php 
          $sql = "SELECT * FROM classes WHERE school_id='". $school_id ."'";
          $res = $con->query($sql);
          while($row = $res->fetch_assoc()){
            ?>
            <!-- loop happening here... -->
            <div class="col pt-3">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://imageio.forbes.com/specials-images/imageserve/5d7a6f9ec0e1890008d139b9/classroom/960x0.jpg?format=jpg&width=960" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">subject: <?php echo $row['subject_code'] ?></h4>
                  <p class="card-text"><?php echo $row['section'] ?></p>
                  <p class="card-text">code: <?php echo $row['class_code'] ?></p>

                  <!-- this view course hindi pa nagagawa -->
                  <a href="#" class="btn btn-primary">View Course</a>
                </div>
              </div>
            </div>

          <?php
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
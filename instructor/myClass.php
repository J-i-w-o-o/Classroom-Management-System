<?php
    require('includes/Header.php');

    
?>

<div class="x--main-container">
  <?php require './Modals/Add/CreateClassModal.php'; ?>
  <div class="container bg-white">
    <!-- DAPAT NAKA MODAL TONG FORM NATO -->
    
    <div class="container text-end pd-5">
      <button type="button" class="btn btn-success  mb-3 mt-2 fs-6" data-toggle="modal" data-target="#studentModal">
        <i class="fa-solid fa-plus"></i> Create Class
      </button>
    </div>

    <div>
      <h1>cards</h1>
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
        One of three columns
        </div>
        <div class="col-sm">
        One of three columns
        </div>
        <div class="col-sm">
        One of three columns
        </div>
      </div>
      
    </div>

  </div>
</div>

<?php
require('includes/Footer.php');
?>
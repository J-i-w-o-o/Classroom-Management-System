<?php
  require('includes/Header.php');
?>

  <link rel="stylesheet" href="../main-css/profile.css">

  <div class="x--main-container">

      <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col md-10 mt-5 pt-5">
              <div class="row z-depth-3">

                <div class="col-sm-4 bg-info rounded">
                  <div class="card-block text-center text-white my-5">
                    <i class="fa fa-user-circle fa-10x" aria-hidden="true"></i>

                    <div class="pictureContainer">
                      <?php
                          if (isset($_GET['error'])){ ?>
                          
                            <div class="alert alert-danger" role="alert">
                              
                          <?=$_GET['error']?>
                          </div>
                            <?php } ?>
                      <form method="post" enctype="multipart/form-data">
                      <input type="file" name="file">
                      <button type="submit" name="upload">Upload</button>
                      </form>
                    </div>

                    <h2 class="font-weight-bold mt-4">John Doe</h2>
                    <p>Administrator</p>
                  </div>
                </div>

                <div class="col-sm-8 bg-white rounded">
                  <h2 class="mt-5 text-center">Profile</h2>
                  <hr class = "badge-primary mx-auto w-25">

                  <div class="row text-center">
                    <div class="col">
                      <p class="font-weight-bold">School ID: </p>
                      <h6 class="text-muted">2022113-M</h6>
                    </div>
                    <div class="col">
                      <p class="font-weight-bold">Email: </p>
                      <h6 class="text-muted">johndoe23@gmail.com</h6>
                    </div>
                    <div class="col">
                      <p class="font-weight-bold">Contact Number: </p>
                      <h6 class="text-muted">0989 234 5678</h6>
                    </div>
                  </div>  
                  
                  <!-- Button trigger modal -->
                  <div class="changePassword text-center mt-5 pt-3">
                    <button type="button" class="btn btn-success fs-5" data-toggle="modal" data-target="#changePassword">
                    <i class="fa fa-key" aria-hidden="true"></i>
                        <span class="changePasswordKey">Change Password</span>
                    </button>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header mx-auto">

                          <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>

                        </div>
                        <div class="modal-body">
                        
                        <form>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Old Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password">
                            <div id="emailHelp" class="form-text"></div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password">
                            <div id="emailHelp" class="form-text"></div>
                          </div>
                          <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm New Password">
                            <div id="emailHelp" class="form-text"></div>
                          </div>
                          
                          <div class="d-flex bd-highlight">
                            <div class="me-auto p-2 bd-highlight"><button type="button" class="btn btn-danger me-auto p-2 bd-highlight fs-6" data-dismiss="modal">CLOSE</button></div>
                            <div class="p-2 bd-highlight"><button type="submit" class="btn btn-success p-2 bd-highlight fs-6">CHANGE</button></div>
                          </div>

                        </form>

                          </div>
                      </div>
                    </div>
                  </div>
                  
                </div>

            </div>
          </div> 
        </div>
      </div>

  </div>

<?php
require('includes/Footer.php');
?>



    
 
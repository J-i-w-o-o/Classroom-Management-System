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
                  <div class="row text-center">
                  <div class="editProfile text-center mt-5 pt-3">
                    <button type="button" class="btn btn-success fs-5" data-toggle="modal" data-target="#editProfile">
                    <i class="fa-solid fa-user"></i>
                        <span class="editProfile  ">EDIT PROFILE</span>
                    </button>
                  </div>
                  <!-- update profile -->
                  <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        
                        <div class="oldPassword">Old Password</div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fa fa-key text-dark" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Input Old Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fa fa-key text-dark" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Input New Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        
                  <form method="post" enctype="multipart/form-data">
                      <input type="file" name="file">
                      <button type="submit" name="uploadProfile">Upload</button>
                      </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                      </div> 
               
                  <!-- Button trigger modal -->
                  <!-- <div class="changePassword text-center mt-5 pt-3">
                    <button type="button" class="btn btn-success fs-5" data-toggle="modal" data-target="#changePassword">
                    <i class="fa fa-key" aria-hidden="true"></i>
                        <span class="changePasswordKey">Change Password</span>
                    </button>
                  </div> -->
                  <!-- Modal -->
                  <!-- <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        
                        <div class="oldPassword">Old Password</div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fa fa-key text-dark" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Input Old Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                              <i class="fa fa-key text-dark" aria-hidden="true"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Input New Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  
                </div>

            </div>
          </div> 
        </div>
      </div>

  </div>

<?php
require('includes/Footer.php');
?>



    
 
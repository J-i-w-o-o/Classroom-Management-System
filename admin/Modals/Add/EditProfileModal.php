
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            
            <div class="modal-body border border-primary rounded p-5">

                <form method="post" class="bg-light" enctype="multipart/form-data">

                    <!-- ADD STUDENT MODAL -->
                    <h1 class="text-center fw-bold mb-5">Edit Profile</h1>

                    <div class="input-group mb-4">
                        <span class="input-group-text">Email</span>
                        <input value="<?php echo $email ?>" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" aria-label="Firstname" placeholder="Email Address" class="form-control" name="email" required>
                    </div>

                    <div class="input-group mb-4">
                        <span class="input-group-text">Contact Number</span>
                        <input value="<?php echo $phone ?>" type="text" aria-label="Contact Number" pattern="^0(9)\d{9}$" maxlength="11" title="Must start with 09 and must be a number!" placeholder="Contact Number" onkeypress="return onlyNumberKey(event)" class="form-control" name="phone" required>
                    </div>

                    <!-- SECTION IS DROP DOWN -->
                    <div class="input-group mb-5">
                        <label for="formFile" class="form-label"><span class="input-group-text">Profile Picture</span></label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="file" value="#black">
                    </div>

                    <div class="d-flex justify-content-around mt-4">
                        <input type="submit" name="uploadProfile" class="btn btn-success btn-lg" value="Save"></input>
                        <a href="Profile.php"><input type="button" class="btn btn-danger btn-lg" data-dismiss="modal" value="Close"></input></a>
                    </div>
                </form>
                
            </div>

        </div>
    </div>
</div>
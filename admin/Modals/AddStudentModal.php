

<!-- Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <form method="post" class="bg-light border border-primary rounded px-5"> 
        <!-- ADD STUDENT MODAL -->
        <h1 class="text-center pt-3 fw-bold fst-italic">Add Users</h1>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="School ID" aria-label="SchoolID" aria-describedby="basic-addon1" name="schoolID">
        </div>

        <div class="input-group mb-5 px-1">
        <span class="input-group-text">First Name</span>
        <input type="text" aria-label="Firstname" placeholder="First Name" class="form-control" name="firstName">
       
        </div>
        <div class="input-group mb-5 px-1">
        <span class="input-group-text">Last Name</span>
        <input type="text" aria-label="Lastname" placeholder="Last Name" class="form-control" name="lastName">
        </div>

        <!-- SECTION IS DROP DOWN -->

        <div class="d-flex justify-content-evenly py-2 mb-4">
        <input type="submit" class="btn btn-success btn-lg mx-2" name="submit" value="Add User"></input>
        <input type="reset" class="btn btn-danger btn-lg mx-2" value="Clear"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </form> 

    </div>
  </div> 
</div>
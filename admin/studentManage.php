<?php
  require('../Components/usermanager.php');
  require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {

} else {
  header("location: ../login.php");
}

?>



  <div class="x--main-container">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#studentModal">
      Add Student
    </button>

    <?php require './Modals/AddStudentModal.php' ?>

    <div class="container p-2 bg-white">
      <table
        id="table"
        data-show-columns="true"
        data-search="true"
        data-url="json/data1.json"
        data-mobile-responsive="true"
        data-check-on-init="true">
        <thead>
          <tr>
            <th data-field="id" data-sortable="true">ID</th>
            <th data-field="name" data-sortable="true">Item Name</th>
            <th data-field="price" data-sortable="true">Item Price</th>
          </tr>
        </thead>
      </table>
    </div>

    <!-- <div class="container-lg pt-5 px-1" id="containerForm"> 
      
    </div> -->
  </div>

<?php
require('HeadFooter/Footer.php');
?>



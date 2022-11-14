<?php
  require('../Components/usermanager.php');
  require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {

} else {
  header("location: ../login.php");
}
$targetid = null;
?>


<div class="x--main-container">

<div class="container-lg p-2 bg-white">

<div class="container-lg p-2 bg-white">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#studentModal">
      Add Class
    </button>
      <table
        id="table"
        data-show-columns="true"
        data-search="true"
        data-url=""
        data-mobile-responsive="true"
        data-check-on-init="true">
        <thead>
          <tr>
            <th data-field="id" data-sortable="true">ID</th>
            <th data-field="student-id" data-sortable="true">STUDENT ID</th>
            <th data-field="name" data-sortable="true">NAME</th>
            <th data-field="section">SECTION</th>
            <th class="text-center">ACTION</th>
          </tr>
        </thead>
        
        <tbody>
          <?php 
            require '../Components/fetchStudents.php'; // fetching all students from the database 
            if($students->num_rows > 0) {
              while($row = $students->fetch_assoc()){?>

                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['student_id'] ?></td>
                  <td><?php echo $row['last_name'] . ', ' . $row['first_name'] ?></td>
                  <td><?php echo $row['section'] ?></td>
                  <td class="d-flex justify-content-center">
                    <button onclick="handleEdit()" type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#editStudentModal" data-edit->
                        Edit
                        <i class="fa-solid fa-pen-to-square h5"></i>
                    </button>
                    <!-- Button trigger modal -->
                    <button onclick="handleDelete()" type="button" class="btn btn-danger mx-1" data-toggle="modal" data-target="#deleteStudentModal">
                        Delete
                      <i class="fa fa-trash h5" aria-hidden="true"></i>
                    </button>
                  </td>
                </tr>
              <?php
              }
            }
          ?>
        </tbody>
      </table>
    </div>
</div>


</div>



<?php
require('HeadFooter/Footer.php');
?>

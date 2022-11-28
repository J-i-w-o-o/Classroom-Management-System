<?php
    require('includes/Header.php');

    
?>

<div class="x--main-container">

  <div class="container-fluid bg-white">
    <!-- DAPAT NAKA MODAL TONG FORM NATO -->
    <form action="./instructor_components/create_class.php">
    <select name="section" id="inputGroupSection" class="custom-select">
            <?php

            $sections = $con->query("SELECT * FROM sections");
            if ($sections->num_rows > 0) {
              while ($row = $sections->fetch_assoc()) { ?>
                <option value="<?php echo $row['course'] . "-" . $row['section'] ?>" name="section"><?php echo $row['course'] . "-" . $row['section'] ?></option>
              <?php
              }
            } else { ?>
              <option value="" name="section">no section records</option>
            <?php
            }
            ?>
          </select>
          <select name="subjectcode" id="subjectcodes" class="custom-select">
            <?php

            $sections = $con->query("SELECT * FROM subjects");
            if ($sections->num_rows > 0) {
              while ($row = $sections->fetch_assoc()) { ?>
                <option value="<?php echo $row['subject_code']?>" name="subjectcode" id="selected"><?php echo $row['subject_code'] ?></option>
              <?php
              }
            } else { ?>
              <option value="" name="section">no section records</option>
            <?php
            }
            ?>
          </select>
      <input type="submit" value="Add Class">
      <input type="text" name="subjectcode"id="subjectcode" />
      <h1 id="display"></h1>
      <h1 id="displaySubject"></h1>
    </form>
    <div>
      <?php 

      if(isset($_SESSION['subjectSelected'])){
        echo $_SESSION['subjectSelected'] + "TEST";
      }
      ?>
    </div>
  </div>
</div>

<?php
require('includes/Footer.php');
?>
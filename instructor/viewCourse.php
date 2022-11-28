<?php
  require('includes/Header.php');
?>

<div class="x--main-container">
  <div class="container bg-white">
    <?php
      $sql = "
      SELECT * FROM classes  WHERE subject_code='".$_GET['subject_code'].
      "'";
      $row = $con->query($sql)->fetch_assoc(); 
    ?>
    <h1><?php echo $row['subject_code'] ?></h1>
  </div>
</div>

<?php
require('includes/Footer.php');
?>
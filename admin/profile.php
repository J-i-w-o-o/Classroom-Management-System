<?php
  require('includes/Header.php');
?>

  <div class="x--main-container">
    <div class="row">
      <div class="col-4 bg-light">
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

        <div class="col-8 bg-dark">

        </div>

      </div>
    </div>
  </div>

<?php
require('includes/Footer.php');
?>



    
 
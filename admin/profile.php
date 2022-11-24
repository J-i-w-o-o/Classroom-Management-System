<?php
  require('includes/Header.php');
?>

  <link rel="stylesheet" href="../main-css/profile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <div class="x--main-container">
    <div class="container-fluid">
    <div class="row">

      <div class="col-4 bg-light pt-5 pb-5">
        
        <div class="upload mx-auto">
          <img src="../img/userIconImage.jpg">
            <?php
                if (isset($_GET['error'])){ ?>
                
                  <div class="alert alert-danger" role="alert">
                    
                <?=$_GET['error']?>
                </div>
                  <?php } ?>
        <div class="round">
            <form method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <!-- <button type="submit" name="upload">Upload</button> -->
            </form>
            <i class="fa-regular fa-camera" style="color: #fff"></i>
        </div>
        
      </div>

      

    </div>
        
        <div class="col-8 bg-dark opacity-50">
          
        </div>

      
      </div>
    </div>
  </div>

<?php
require('includes/Footer.php');
?>



    
 
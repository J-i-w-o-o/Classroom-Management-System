<?php
require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {
} else {
    header("location: login.php");
}

?>


<div class="x--main-container">
   
      <h1>AWDASDawd</h1>
    </div>

<?php
require('HeadFooter/Footer.php');
?>

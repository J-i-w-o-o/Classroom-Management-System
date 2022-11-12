<?php
require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {
} else {
  header("location: login.php");
}
?>


<div class="x--main-container">

  <div class="container bg-white">
    <h1>adwasd</h1>
  </div>
</div>

<?php
require('HeadFooter/Footer.php');
?>
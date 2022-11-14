<?php

if (isset($_SESSION['user'])) {
  require('HeadFooter/Header.php');
} else {
  header("location: ../login.php");
}

require('../Components/Database.php');
?>

<div class="x--main-container">
  <div class="container-fluid">
  </div>
</div>
<?php
require('HeadFooter/Footer.php');
?>
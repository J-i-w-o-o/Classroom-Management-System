<?php
  require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {

} else {
  header("location: ../login.php");
}
?>

<link rel="stylesheet" href="../main-css/aboutUs.css">

<div class="x--main-container">
  <div class="container-fluid">

  <div class="d-flex flex-column pt-5">
    <div class="p-5 mx-auto bg-success">About Us</div>
    <div class="p-3">Flex item 2</div>
    <div class="p-3">Flex item 3</div>
  </div>

  </div>  
</div>

<?php
require('HeadFooter/Footer.php');
?>


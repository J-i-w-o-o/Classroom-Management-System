<?php
require('../Components/usermanager.php');
require('../Components/upload.php');

require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {
} else {
  header("location: login.php");
}
require('NavigationBar.php');
?>

<div class="main-container">
  <div class="modal-container">
    <form method="post">
      <input type="text" name="schoolID" id="" placeholder="school id">
      <input type="text" name="firstName" id="" placeholder="first">
      <input type="text" name="lastName" id="" placeholder="lastname">
      <input type="password" name="password" id="" placeholder="password">
      <input type="text" name="age" id="" placeholder="age">
      <input type="text" name="address" id="" placeholder="address">
      <select name="role" id="">
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="ADD USER">
    </form>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="upload">Upload</button>
    </form>
  </div>
</div>
<?php
require('HeadFooter/Footer.php');
?>
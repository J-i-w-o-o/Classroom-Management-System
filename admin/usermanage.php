<?php
require('../Components/usermanager.php');

require('HeadFooter/Header.php');
if (isset($_SESSION['user'])) {
} else {
  header("location: login.php");
}
?>

<div class="x--main-container">
  <div class="modal-container">
    <form method="post">
      <input type="text" name="schoolID" placeholder="school id">
      <input type="text" name="firstName"  placeholder="first">
      <input type="text" name="lastName" placeholder="lastname">
      <input type="password" name="password" placeholder="password">
      <input type="text" name="age" placeholder="age">
      <input type="text" name="address" placeholder="address">
      <select name="role">
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="ADD USER">
    </form>

  </div>
</div>
<?php
require('HeadFooter/Footer.php');
?>
<?php require('Components/usermanager.php'); ?>
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


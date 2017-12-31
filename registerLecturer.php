<?php
include "connection.php";

$register = mysql_query("INSERT INTO lecturer (lecturerID, name, email, username, password)
values('$_POST[lecturerID]','$_POST[name]','$_POST[email]','$_POST[username]','$_POST[password]')");

if($register)
{
  echo"<script>
  alert('Registration Successful!');location.href='login.php';
  </script>";
}
else
{
  echo"<script>
  alert('Registration Failed!'); location.href='login.php';
  </script>";
}
?>

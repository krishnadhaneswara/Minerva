<?php
include "connection.php";

$register = mysql_query("INSERT INTO student (studentID, studentName, email, username, password)
values('$_POST[studentID]','$_POST[studentName]','$_POST[email]','$_POST[username]','$_POST[password]')");

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

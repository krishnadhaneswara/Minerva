<?php
include "../connection.php";

$check = mysql_query("SELECT * FROM course WHERE classID='".$_POST['classID']."'");
$data = mysql_fetch_array($check);

if($_POST['classCode'] == $data['classCode'])
{
    $save = mysql_query("INSERT INTO enrolled (classID, lecturerID, studentID)
    values('$_POST[classID]','$_POST[lecturerID]','$_POST[studentID]')");

    if($save)
    {
      echo"<script>
      alert('Enrollment Successful!');location.href='sCourse.php';
      </script>";
    }
    else
    {
      echo"<script>
      alert('Enrollment Failed!'); location.href='classList';
      </script>";
    }
}
else
{
    echo "location.href='classList.php'";
}
?>

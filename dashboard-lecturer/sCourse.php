<?php
include "../connection.php";

$save=mysql_query("INSERT INTO course (classID, className, classCode, lecturerID) values('$_POST[course]', '$_POST[name]', '$_POST[key]','$_POST[idlecturer]')");

if($save)
{
    echo "<script>
    alert('Course Created Successfully!');location.href='topic.php';
    </script>";
}
else
{
    echo"<script>
    alert('Failed to Create Course');location.href='create-class.php';
    </script>";
}

?>

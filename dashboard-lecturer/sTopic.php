<?php
include "../connection.php";

session_start();

$save = mysql_query("INSERT INTO topic (classID, topic)
values('$_POST[classID]','$_POST[topic]')");

if($save)
{
    mysql_query("UPDATE lecturer SET topicCounter = topicCounter + 1 WHERE lecturerID='".$_SESSION['lecturerID']."'");

    echo"<script>
    alert('Topic Addition Successful!');location.href = 'topic.php';
    </script>";
}
else
{
    echo"<script>
    alert('Topic Addition Failed!'); location.href='#';
    </script>";
}
?>

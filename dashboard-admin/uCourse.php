<?php

include "../connection.php";

$update=mysql_query("UPDATE course SET className='$_POST[name]', lecturerID='$_POST[lecturer]', classCode='$_POST[key]'
WHERE classID='".$_POST[classID]."'");

if($update)
{
	header('location:class-list.php');
	}
else
{
	header('location:edit-class.php');
	}
?>

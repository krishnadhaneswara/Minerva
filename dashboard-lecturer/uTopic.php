<?php

include "../connection.php";

$update=mysql_query("UPDATE topic SET topic = '$_POST[topic]' WHERE topicID='".$_POST[topicID]."'");
if($update)
{
	header('location:topic.php');
	}
else
{
	header('location:vTopic.php');
	}
?>

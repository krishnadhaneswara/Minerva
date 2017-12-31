<?php
session_start();
include "connection.php";

if(empty($_SESSION['username']))
	{
		echo"<script>
		alert('You Must Log In to Use the Website!');location.href='login.php';
		</script>";
		}
else
?>

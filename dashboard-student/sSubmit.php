<?php
	include('../config.php');

	session_start();

	$ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip','py','java','cpp');
	$fileName = $_FILES['file']['name'];
	$fileExt = strtolower(end(explode('.', $fileName)));
	$fileSize = $_FILES['file']['size'];
	$fileTemp = $_FILES['file']['tmp_name'];

	$studentID = $_SESSION['studentID'];
	$fileName	= $_POST['nama'];
  $enrollID = $_POST['enrollID'];

	if(in_array($fileExt, $ext) === true)
	{
		if($fileSize < 50000000)
		{
			$directory = '../files/'.$fileName.'.'.$fileExt;
			move_uploaded_file($fileTemp, $directory);
      $in = mysql_query("UPDATE enrolled SET fileNameS = '$fileName', fileTypeS = '$fileExt', fileSize = '$fileSize', fileDirS = '$directory'
      WHERE enrollID = '$enrollID'");

			if($in)
			{
				echo "<script>
        alert('Submission Successful!');location.href='sCourse.php';
        </script>";
			}
			else
			{
				echo "<script>
        alert('Submission Failed!');location.href='submitAssignment.php';
        </script>";
			}
			}
		else
		{
		echo "<script>
    alert('File cannot exceed 50 Mb!');location.href='submitAssignment.php';
    </script>";
		}
			}
	else
	{
		echo "<script>
  	alert('Unallowed extension detected!');location.href='submitAssignment.php';
    </script>";
	}
?>

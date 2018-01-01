<?php
			include('../config.php');
				$allowed_ext = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'py', 'java','cpp');
				$fileName = $_FILES['file']['name'];
				$fileExt	= strtolower(end(explode('.', $fileName)));
				$fileSize	= $_FILES['file']['size'];
				$fileTemp	= $_FILES['file']['tmp_name'];
				$nama	= $_POST['nama'];
        $course = $_POST['classID'];
        session_start();

				if(in_array($fileExt, $allowed_ext) === true)
				{
					if($fileSize < 50000000)
					{
						$directory = '../files/'.$nama.'.'.$fileExt;
						move_uploaded_file($fileTemp, $directory);
            $in = mysql_query("UPDATE course SET fileName = '$nama', fileType = '$fileExt', fileSize = '$fileSize', fileDir ='$directory'
            WHERE classID='$course'");

						if($in)
						{
            	mysql_query("UPDATE lecturer SET uploadCounter = uploadCounter + 1 WHERE lecturerID = '".$_SESSION['lecturerID']."'");
							echo "<script>
              alert('Upload Success');location.href='assignment.php';
              </script>";
						}
						else
						{
							echo "<script>
              alert('Upload Failed!');location.href='#';
              </script>";
						}
					}
					else
					{
						echo "<script>
            alert('File cannot exceed 50Mb!');location.href='lecturer.php?cek=intro';
            </script>";
					}
				}
				else
				{
					echo "<script>
        	alert('Extention not valid!');location.href='lecturer.php?cek=intro';
          </script>";
				}
?>

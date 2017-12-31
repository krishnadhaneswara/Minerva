<!DOCTYPE html>
<html>
<head>
	<title>Simple Upload dan Download File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<div id="container">
    	<div id="header">
    		<h1>Simple Upload dan Download File</h1>
        	<span>Dibuat oleh Pino @tutorialweb.net</span>
        </div>
 
        <div id="menu">
        	<a href="index.php">Home</a>
            <a href="upload.php" class="active">Upload</a>
            <a href="download.php">Download</a>
        </div>
 
        <div id="content">

 
            <p>
            <form action="sUpload.php" method="POST" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
            	<tr>
                	<td width="40%" align="right"><b>Nama File</b></td><td><b>:</b></td><td><input type="text" name="nama" size="40" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" /></td>
                </tr>
            </table>
            </form>
            </p>
        </div>
    </div>
 
</body>
</html>
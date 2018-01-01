<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="../images/icon.png" type="image/png">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>MINERVA Academic & Learning Center</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-6.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
              <class="simple-text">
                <?php
                  session_start();
                  echo "<h6>Welcome, $_SESSION[username]</h6>";
                ?>
              </class>
            </div>
						<ul class="nav">
                <li>
                    <a href="class-list.php">
                        <i class="pe-7s-back"></i>
                        <p>Back to Class List</p>
                    </a>
                </li>
                <li>
                    <a href="registered-student.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Student List</p>
                    </a>
                </li>
                <li>
                    <a href="registered-lecturer.php">
                        <i class="pe-7s-add-user"></i>
                        <p>Lecturer List</p>
                    </a>
                </li>
                <li>
                    <a href="enrolled.php">
                        <i class="pe-7s-ribbon"></i>
                        <p>Enrollment Log</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="../index.php">
                        <i class="pe-7s-power"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Class Data Update</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Class Info</h4>
                            </div>
                            <div class="content">
															<?php
															include "../connection.php";
															$show=mysql_query("SELECT * FROM course WHERE classID='".$_GET['classID']."'");
															while($data=mysql_fetch_array($show))
															{
																$id=$data['classID'];
																$name=$data['className'];
																$key=$data['classCode'];
															    $lecturer=$data['lecturerID'];
																}

															?>
<form action="uCourse.php" method="POST">
<table>
<tr>
	<td>Class ID</td>
	<td>&nbsp</td>
		<td>&nbsp</td>
    <td><?php echo $id;?><input type="hidden" name="classID" value="<?php echo $id;?>">
           </td>
</tr>
<tr>
	<td>&nbsp</td>
</tr>
<tr>
	<td>Class Name</td>
	<td>&nbsp</td>
		<td>&nbsp</td>
    <td><input type="text" name="name" class="form-control" value="<?php echo $name;?>"></td>
</tr>
<tr>
	<td>&nbsp</td>
</tr>
<tr>
	<td>Lecturer</td>
	<td>&nbsp</td>
		<td>&nbsp</td>
    <td>
        <select name="lecturer" style="color:black;">
        <option value="0" selected="selected"><?php echo $lecturer;?></option>
        <?php
            include "../connection.php";

            $view=mysql_query("SELECT * FROM lecturer");
            while($data=mysql_fetch_array($view))
            {
                $idLecturer=$data['lecturerID'];
                $nama=$data['name'];

                echo "<option value=$idLecturer>$idLecturer | $nama </option>";
            }?>
        </select>
    </td>
</tr>
<tr>
	<td>&nbsp</td>
</tr>
<tr>
	<td>Enrollment Key</td>
		<td>&nbsp</td>
		<td>&nbsp</td>
    <td><input type="text" class="form-control" name="key" value="<?php echo $key;?>"></td>
</tr>
<tr>
	<td>&nbsp</td>
</tr>
<tr>
	<td>&nbsp</td>
	<td colspan="3" align="right">
    <input type="submit" name="edit" value="Save" class="btn btn-info btn-fill pull-right">
    <p class="pull-right">&nbsp</p>
    <p class="pull-right">&nbsp</p>
    <p class="pull-right">&nbsp</p>
    <input type="reset" name="batal" value="Cancel" class="btn btn-info btn-fill pull-right">
  </td>
</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="container-fluid">
<p class="copyright pull-right">
&copy; 2016 Minerva
</p>
</div>
</footer>
</div>
</div>
</body>
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="assets/js/light-bootstrap-dashboard.js"></script>
</html>

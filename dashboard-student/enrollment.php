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
                  $studentID = $_SESSION['studentID'];
                  echo "<h6>Welcome, $_SESSION[username]</h6>";
                ?>
              </class>
            </div>
            <ul class="nav">
                <li>
                    <a href="classList.php">
                        <i class="pe-7s-back"></i>
                        <p>Back to Class List</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="../logout.php">
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
                    <a class="navbar-brand" href="#">Class Enrollment</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Enroll in a Class</h4>
                            </div>
                            <div class="content">
                              <?php
              									include "../connection.php";
              									$show=mysql_query("SELECT * FROM course WHERE classID='".$_GET['classID']."'");
              									while($data=mysql_fetch_array($show))
              									{
              										$cID = $data['classID'];
              										$name = $data['className'];
              										$key = $data['classCode'];
                  								$lecturer = $data['lecturerID'];
              									}
              								?>
                              <form action="enroll.php" method="POST">
                              <table>
                              <tr>
                                <td>Class Code</td>
                                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                </td>
                                <td>Enrollment Key</td>
                              </tr>
                              <tr>
                                <td><?php echo $cID;?> - <?php echo $name;?><input type="hidden" name="classID" value="<?php echo $cID;?>">
                                <input type="hidden" name="lecturerID" value="<?php echo $lecturer;?>">
                                <input type="hidden" name="studentID" value="<?php echo $studentID;?>">
                                </td>
                                <td></td>
                                <td><input type="password" name="classCode" class="form-control" placeholder="Enrollment Key"></td>
                              </tr>
                              <tr>
                                <td>&nbsp&nbsp</td>
                                <td>&nbsp&nbsp</td>
                                <td>&nbsp&nbsp</td>
                              </tr>
                              <tr>
                                <td colspan="3" align="right">
                                  <input type="reset" name="Cancel" value="Cancel" class="btn btn-info btn-fill pull-right">
                                  <p class="pull-right">&nbsp</p>
                                  <p class="pull-right">&nbsp</p>
                                  <p class="pull-right">&nbsp</p>
                                  <p class="pull-right">&nbsp</p>
                                  <input type="submit" name="Enroll" value="Enroll" class="btn btn-info btn-fill pull-right">
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

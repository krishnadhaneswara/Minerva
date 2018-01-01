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
                    <a href="sCourse.php">
                        <i class="pe-7s-back"></i>
                        <p>Back to Class</p>
                    </a>
                </li>
                <li>
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="../index.html">
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
                    <a class="navbar-brand" href="#">Assignment</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Submit Assignment</h4>
                            </div>
                            <div class="content">
                              <form action="sSubmit.php" method="POST" enctype="multipart/form-data">
                           <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
                            <tr>
                                <td><input type="text" name="nama" size="40" placeholder="Submission Title" class="form-control" required />
                                    <input type="hidden" name="enrollID" value="<?php echo $_GET['enrollID'];?>">
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td><input type="file" name="file" required /></td>
                            </tr>
                            <tr>
                               	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" class="btn btn-info btn-fill pull-right"/></td>
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

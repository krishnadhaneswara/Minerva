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
                    <a href="topic.php">
                        <i class="pe-7s-back"></i>
                        <p>Back to Class</p>
                    </a>
                </li>
                <li>
                    <a href="assignment.php">
                        <i class="pe-7s-copy-file"></i>
                        <p>Assignment List</p>
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
                    <a class="navbar-brand" href="#">Class Creation</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create a Class</h4>
                            </div>
                            <div class="content">
                              <form action="sCourse.php" method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Class Code</label>
                                            <input type="text" name="course" class="form-control" placeholder="Class Code" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Class Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Class Name" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Enrollment Key</label>
                                            <input type="text" name="key" class="form-control" placeholder="Enrollment Key" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label></label>
                                            <?php $GID=$_SESSION['lecturerID'];?>
                                            <input type="hidden" name="idlecturer" class="form-control" value="<?php echo $GID ?>">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="create" value="Create Class" class="btn btn-info btn-fill pull-right"/>
                                <p class="pull-right">&nbsp</p>
                                <p class="pull-right">&nbsp</p>
                                <input type="reset" name="cancel" value="Cancel" class="btn btn-info btn-fill pull-right"/>
                                <div class="clearfix"></div>
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

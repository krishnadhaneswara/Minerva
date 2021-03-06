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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        var activeSystemClass = $('.list-group-item.active');

        //something is entered in search form
        $('#system-search').keyup( function() {
           var that = this;
            // affect all table rows on in systems table
            var tableBody = $('.table-list-search tbody');
            var tableRowsClass = $('.table-list-search tbody tr');
            $('.search-sf').remove();
            tableRowsClass.each( function(i, val) {

                //Lower text for case insensitive
                var rowText = $(val).text().toLowerCase();
                var inputText = $(that).val().toLowerCase();
                if(inputText != '')
                {
                    $('.search-query-sf').remove();
                    tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                        + $(that).val()
                        + '"</strong></td></tr>');
                }
                else
                {
                    $('.search-query-sf').remove();
                }

                if( rowText.indexOf( inputText ) == -1 )
                {
                    //hide rows
                    tableRowsClass.eq(i).hide();

                }
                else
                {
                    $('.search-sf').remove();
                    tableRowsClass.eq(i).show();
                }
            });
            //all tr elements are hidden
            if(tableRowsClass.children(':visible').length == 0)
            {
                tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
            }
        });
    });
    </script>
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
                      <i class="pe-7s-notebook"></i>
                      <p>Class</p>
                  </a>
              </li>
              <li>
                  <a href="assignment.php">
                      <i class="pe-7s-copy-file"></i>
                      <p>Assignment List</p>
                  </a>
              </li>
              <li class="active">
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
                    <a class="navbar-brand" href="#">Enrolled Class</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-3">
                    <form action="#" method="get">
                        <div class="input-group">
                            <input class="form-control" id="system-search" name="q" placeholder="Search" required>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                        <br />
                    </form>
                </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student Enrollment Log</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped table-list-search">
                                    <thead>
                                      <th>Student ID</th>
                                    	<th>Student Name</th>
                                    	<th>Class ID</th>
                                      <th>Lecturer Name</th>
                                    </thead>
                                    <tbody>
                                      <?php
                                      include "../connection.php";
                                      $GUN=$_SESSION['FullName'] ;
                                      $view=mysql_query("SELECT b.studentID , b.classID, a.studentName, c.name FROM student as a
                                      INNER JOIN enrolled as b ON a.studentID = b.studentID
                                      INNER JOIN lecturer as c ON b.lecturerID = c.lecturerID");
                                      while($data=mysql_fetch_array($view))
                                      {
                                      	$id=$data['studentID'];
                                      	$studentName=$data['studentName'];
                                      	$course=$data['classID'];
                                      	$lecturer=$data['name'];
                                        if ($lecturer == $GUN) {
                                        echo "<tr>";
                                      	echo "<td>".$id."</td>";
                                      	echo "<td>".$studentName."</td>";
                                      	echo "<td>".$course."</td>";
                                      	echo "<td>".$lecturer."</td>";
                                      	echo "</tr>";
                                      }
                                      }
                                      ?>
                                    </tbody>
                                </table>
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
</body>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="assets/js/light-bootstrap-dashboard.js"></script>
</html>

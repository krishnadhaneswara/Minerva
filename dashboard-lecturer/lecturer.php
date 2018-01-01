<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>E-learning</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link href='https://fonts.googleapis.com/css?family=Eczar' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="container">
		<div class="row">
		<div class="twelve columns">
			<header>
                <?php
                 session_start();
				echo "<h1>Welcome $_SESSION[username]</h1>";
                    ?>
			</header>
		</div>
		</div>
		<div class="row">
		<div class="three columns">
			<div class="box">
				<div class="menu">
					<h5>Menu</h5>
					<nav>
					<ul>
						<li><a href="lecturer.php?cek=topic">Topic Outline</li></a>
						<li><a href="lecturer.php?cek=assignment">Assignment</li></a>
                    <li><a href="lecturer.php?cek=statistic">Statistic</li></a>
                        <li><a href="../logout.php">Logout</a></li>
					</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="nine columns">
			<div class="box extra">
                <?php

                    $cek=$_GET['cek'];
                    if($cek=="topic")
                    {
                        include "topic.php";
                    }
                    elseif($cek=="assignment")
                    {
                        include "assignment.php";
                    }
                    elseif($cek=="statistic")
                    {
                        include "statistic.php";
                    }
                    elseif($cek=="intro")
                    {
                        include "lecturerIntro.php";
                    }
                ?>
			</div>
		</div>
		</div>

	</div>
</body>
</html>

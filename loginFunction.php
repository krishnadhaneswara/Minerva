<?php
include"connection.php";

session_start();

if(empty($_POST['username']))
{
    echo"<script>
    alert('Username or E-Mail cannot be empty!');location.href='login.php';
    </script>";
}
elseif(empty($_POST['password']))
{
    echo"<script>
    alert('Password cannot be empty!');location.href='login.php';
    </script>";
}

$loginAdmin = mysql_query("SELECT * FROM admin WHERE username='".$_POST['username']."'");
$locateAdmin = mysql_num_rows($loginAdmin);
$dataAdmin = mysql_fetch_array($loginAdmin);

$loginLecturer = mysql_query("SELECT * FROM lecturer WHERE username='".$_POST['username']."'") or die(mysql_error());
$locateLecturer = mysql_num_rows($loginLecturer);
$dataLecturer = mysql_fetch_array($loginLecturer);

$loginStudent = mysql_query("SELECT * FROM student WHERE username='".$_POST['username']."'") or die (mysql_error());
$locateStudent = mysql_num_rows($loginStudent);
$dataStudent = mysql_fetch_array($loginStudent);

if($locateLecturer > 0)
{
    if($_POST['password'] == $dataLecturer['password'])
    {
        $_SESSION['lecturerID'] = $dataLecturer['lecturerID'];
        $_SESSION['username'] = $dataLecturer['username'];
        $_SESSION['FullName'] = $dataLecturer['name'];

        echo"<script>
        location.href='dashboard-lecturer/topic.php';
        </script>";
    }
    else
    {
        echo "<script>
    alert('Username and Password did not match!');location.href='login.php';
    </script>";
    }
}

elseif($locateStudent > 0)
{
    if($_POST['password'] == $dataStudent['password'])
    {
        $_SESSION['studentID'] = $dataStudent['studentID'];
        $_SESSION['username'] = $dataStudent['username'];

        echo"<script>
        location.href='dashboard-student/sCourse.php';
        </script>";
    }
    else
    {
        echo "<script>
    alert('Username and Password did not match!');location.href='login.php';
    </script>";
    }
}
elseif($locateAdmin > 0)
{
    if($_POST['password'] == $dataAdmin['password'])
    {
        $_SESSION['username'] = $dataAdmin['username'];
        $_SESSION['access'] = $dataAdmin['access'];

        echo"<script>
        location.href='dashboard-admin/class-list.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Username and Password did not match!'):location.href='login.php';
        </script>";
    }
}
else
{
    echo "<script>
    alert('User not found');location.href='login.php';
    </script>";
}
?>

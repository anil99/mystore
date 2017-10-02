<?php
session_start();
include 'dbh1.php';

$uid=$_POST['user'];
$pwd=$_POST['password'];
//echo $uid;
//echo $pwd;
if($uid=='' OR $pwd=='')
{
   echo"<script>alert('your username  or password are incorrect')</script>";
   include "student_login.php";
}

else
{
$sql = "SELECT * FROM student_authentication WHERE user = '$uid' AND password='$pwd' "; 
$result=$conn->query($sql);
if(!$row = $result->fetch_assoc())
{
echo "<script>alert('your username or password is incorrect!')</script>";
include "student_login.php";
}
else 
 {

 $_SESSION['user'] = $row['user'];
 header("Location: studtask_student.php");
 }
 }
/*
if(!$row = $result->fetch_assoc())
{
echo "your username or password is incorrect!";
//header("Location:student_login.php");
}
else 
 {

 $_SESSION['user'] = $row['user'];
 header("Location: studtask_student.php");
 }
//header("Location: studtask_student.php");
*/
?>

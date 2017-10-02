<?php
session_start();
include 'dbh1.php';

$uid=$_POST['user'];
$pwd=$_POST['password'];
if($uid=='' OR $pwd=='')
{
   echo"<script>alert('your username  or password are incorrect')</script>";
   include "staff_login.php";
}
else
{
$sql = "SELECT * FROM authintication WHERE user = '$uid' AND password='$pwd' "; 
$result=$conn->query($sql);
if(!$row = $result->fetch_assoc())
{
echo"<script>alert('your username  or password are incorrect')</script>";
include "staff_login.php";
}
else 
 {

 $_SESSION['user'] = $row['user'];
 header("Location: xyz.php");
 }
 }
//header("Location: student_login.php");
?>

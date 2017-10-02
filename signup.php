<?php
session_start();
include 'dbh1.php';
$first=$_POST['first'];
$last=$_POST['last'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$sql = "INSERT INTO user(first,last,uid,pwd) 
VALUES('$first','$last','$uid','$pwd')";
$result=$conn->query($sql);
if(!$row = $result->fetch_assoc())
{
 echo"<script>alert('not inserted')</script>";
include 'signup.php';
}
else
{
//if(!$row = $result->fetch_assoc())

 echo"<script>alert('not inserted')</script>";
//include 'studtask_student.php';

}
//header("Location: index1.php");
?>

<?php
session_start();
include 'dbh1.php';
$id = $_POST['id'];
$Name = $_POST['Name'];
$year = $_POST['year'];
$department = $_POST['department'];
if($id=='' or $Name=='' or $year=='' or $department=='')
{
echo "<script>alert('please enter the required fields correctly')</script>";
include "student_entry.php";
}
else
{
$sql="INSERT INTO student(id,Name,department,year) VALUES('$id','$Name','$department','$year')";
if($conn->query($sql)==TRUE)
{
echo "<script>alert('task performed successfully')</script>";
include "student_entry.php";
}
else
{
echo "<script>alert('task not performed successfully')</script>";
include "xyz.php";
}
}
?>


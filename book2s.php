<?php
session_start();
include 'dbh1.php';
//include 'studtask_student.php';
$book_name = $_POST['book_name'];
$Author = $_POST['Author'];
$s_no = $_POST['s_no'];
if($book_name=='' or $Author=='' or $s_no=='')
{
echo "<script>alert('please enter the required fields')</script>";
include "studtask_student.php";
}
$sql="SELECT * FROM book WHERE book_name='$book_name' AND Author='$Author' AND s_no='$s_no'";
$result=$conn->query($sql);
if(!$row = $result->fetch_assoc())
{
echo"<script>alert('Record Not Found in book')</script>";
include "studtask_student.php";
}
$sql1="INSERT INTO borrow(book_name,Author,s_no) VALUES('$book_name','$Author','$s_no')";
$result1=$conn->query($sql1);
if(!$row = $result1->fetch_assoc())
{
echo"<script>alert('Record Not Found in borrow')</script>";
include "studtask_student.php";
}
$sql3="DELETE * FROM book WHERE Author='$Author' AND book_name='$book_name' AND s_no='$s_no'";
$result2=$conn->query($sql3);
if(!$row = $result2->fetch_assoc())
{
echo"<script>alert('Record Not Found sas')</script>";
include "studtask_student.php";
}
header("Location:'studtask_student.php'");

/*
if(!$row = $result->fetch_assoc())
{
echo "<script>alert("Record Not Found")</script>";
include 'studtask_student.php';
}
else
{
//&sql="delete * from retu where s_no='$s_no'";
header("Location:'studtask_student.php'");
}
header("Location:'studtask_student.php'");
*/
?>

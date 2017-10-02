<?php
session_start();
include 'dbh1.php';
//include 'studtask_student.php';
$book_name = $_POST['book_name'];
$Author = $_POST['Author'];
$s_no = $_POST['s_no'];
if($book_name=='' or $Author=='' or $s_no=='')
{
echo "<script>alert('Please Enter the required field')</script>";
include "xyz.php";
}
else
{
$sql="SELECT * FROM book WHERE book_name='$book_name' AND Author='$Author' AND s_no='$s_no'";
$result=$conn->query($sql);
if(!$row = $result->fetch_assoc())
{
echo"<script>alert('Record Not Found')</script>";
include "xyz.php";
}
else
{
echo"<script>alert('Book Available')</script>";
include "xyz.php";
}
}
?>

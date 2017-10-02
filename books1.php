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
else
{
$sql="SELECT * FROM borrow WHERE s_no=$s_no";
$result2=$conn->query($sql);
if(!$row1=$result2->fetch_assoc())
{
echo"<script>alert('NO BOOK HAVE ISSUED WITH THIS NAME OR SERIAL NO')</script>";
include "studtask_student.php";
}
else
{
$sql1="INSERT INTO retu(book_name,Author,s_no) VALUES('$book_name','$Author','$s_no')";
//$sql="DELETE FROM borrow(book_name,Author,s_no) where s_no='$s_no' AND book_name='$Book_Name' AND Author='$Author'";
$result=$conn->query($sql1);
//if(!$row = $result->fetch_assoc())
//echo "gfgghgh";
//$result=$conn->query($sql);
if(!$row = $result->fetch_assoc())
{
 echo"<script>alert('not inserted')</script>";
include "studtask_student.php";
}
else
{
 echo"<script>alert('successfully inserted')</script>";
include "studtask_student.php"; 
}
$sql="DELETE  * FROM borrow WHERE book_name='$book_name' AND Author='$Author' AND s_no='$s_no'";
$result1=$conn->query($sql);
if(!$row2=$result->fetch_assoc())
{
echo "<script>alert('task successfull')</script>";
include "studtask_student.php";
}
else
{
echo "<script>alert('task not successfull')</script>";
include "studtask_student.php";
}
//$sql="select * from retu where Author='$Author' and book_name='$Book_Name'";

/*
$result=$conn->query($sql1);
if(!$row = $result->fetch_assoc())
{
echo "Record Not Found"
header("Location:'studtask_student.php'");
}
else
{
&sql="delete * from retu where s_no='$s_no'";
header("Location:'studtask_student.php'");
}
*/
//header("Location:studtask_student.php");
}
}
?>

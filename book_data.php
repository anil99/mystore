<?php
session_start();
include 'dbh1.php';
$book_name = $_POST['book_name'];
$Author = $_POST['Author'];
$s_no = $_POST['s_no'];
$title = $_POST['title'];
$price = $POST['price'];
/*
if($book_name=='' or $Author=='' or $s_no=='' or $price=='' or $title=='')
{
echo "<script>alert('please enter the required fields correctly')</script>";
include "book_entry.php";
}
*/

$sql="INSERT INTO book(book_name,Author,s_no,title,price) VALUES('$book_name','$Author','$s_no','$title','$price')";
if($conn->query($sql)==TRUE)
{
echo "<script>alert('task  performed successfully')</script>";
include 'book_entry.php';
}
else
{
echo "<script>alert('task not performed successfully')</script>";
include 'xyz.php';
}

?>

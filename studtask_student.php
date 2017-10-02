<?php
session_start();
include 'dbh1.php';

//$uid=$_POST['user'];
//$pwd=$_POST['password'];
///$sql = "SELECT * FROM authintication WHERE user = '$uid' AND password='$pwd' "; 
//$result=$conn->query($sql);
//if(!$row = $result->fetch_assoc())
//echo "  welCome $uid";
//else 
 //{

 //$_SESSION['user'] = $row['user'];
 //}
//header("Location: studtask_student.php");
?>
<html>
<head>
<style>
body{
background-color:navy;
background-image:url(Library-Wallpapers-Desktop.jpg);
}
div.relative {
background-color:green;
    position: relative;
    width: 100px;
    height: 200px;
    border: 3px solid #FF0000;
} 
form{
color:#FF0000;
background-color:green;
}
input{
color:#FF0000;
}

div.absolute {
background-color:green;
    position: absolute;
    top: 100px;
    left: 475px;
    width: 400px;
    height: 150px;
    border: 3px solid #FF00FF;
}
</style>
</head>
<body>
<div class="absolute">
<center>Return Book<br></center>
<center>
<form class="relative" action="books1.php" method="post">
<hr>
<input type="text" name="book_name" placeholder="Book Name">
<input type="text" name="Author" placeholder="Author">
<input type="number" name="s_no" placeholder="s_no">
<center><input type="submit" name="submit" value="SUBMIT"></center></hr>
</form>
</center>


<center>
<form class="relative" action="book2s.php" method="post">
<center>Borrow Book<br></center>
<hr>
<input type="text" name="book_name" placeholder="Book Name">
<input type="text" name="Author" placeholder="Author">
<input type="number" name="s_no" placeholder="s_no">
<center><input type="submit" name="submit" value="SUBMIT"></center></hr>
</form>
</center>




</form>
<form action="logout.php" method="post">
<center><button>LOGOUT</buttou></center>
</center>
</form>
</div>

</body>

</html>

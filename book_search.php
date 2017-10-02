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
<center>
<form class="relative" action="book3s.php" method="post">
<center>Search Book<br></center>
<hr>
<input type="text" name="book_name" placeholder="Book Name">
<input type="text" name="Author" placeholder="Author">
<input type="number" name="s_no" placeholder="s_no">
<center><input type="submit" name="submit" value="SUBMIT"></center></hr>
<br><br>
</form>
</div>

</body>

</html>

<html>
<head>
<style>
body{
background-color:navy;
background-image:url(389873.jpg);
}
div.relative {
background-color:#ccc;
    position: relative;
    width: 100px;
    height: 200px;
    border: 3px solid #FF0000;
} 
form{
color:#FF0000;
background-color:#ccc;
}
input{
color:#FF0000;
}

div.absolute {
background-color:#ccc;
    position: absolute;
    top: 300px;
    left: 475px;
    width: 400px;
    height: 150px;
    border: 3px solid #FF00FF;
}
</style>
</head>
<body>
<div class="absolute">
<center>Student Login</center>
<center>
<form class="relative" action="login1.php" method="post">
user Name<input type="text" name="user"><br>
password<input type="password" name="password"><br>
<center>SIGNIN<input type="submit" name="submit" value="SUBMIT"></center>
</form>
</center>
</div>
</body>
</html>

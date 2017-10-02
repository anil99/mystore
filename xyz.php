<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
   padding-left:50px;
   padding-right:50px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #0000FF;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<div class="nav">
<div class="nav_wrapper">
<div class="dropdown">
  <button class="dropbtn">Admin</button>
  <div class="dropdown-content">
    <a href="student_entry.php">New Student</a>
    <a href="book_entry.php">New Book</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Books</button>
  <div class="dropdown-content">
    <a href="book_search.php">Search Book</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Student</button>
  <div class="dropdown-content">
    <a href="student_login.php">Login</a>
    
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">About Library</button>
  <div class="dropdown-content">
    <a href="library_current.php">About Library</a>
  </div>
</div>
</div>
</div>
</body>
</html>


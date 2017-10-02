<?php
$servername = "localhost";
$username = "root";
$password = "anil2015";

// Create connection
$conn =  mysqli_connect("localhost", "root", "anil2015","school");

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
else
    echo "Connected successfully";
?>

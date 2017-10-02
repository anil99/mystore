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
echo "Connected successfully";
// sql to create table
$sql = "CREATE TABLE reader (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name varchar(25),department varchar(25),phone INT(10)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table reader created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

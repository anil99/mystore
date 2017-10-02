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
$sql = "CREATE TABLE book (
sr_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Author varchar(25),title varchar(25),publisher varchar(40),price int(10),quantiy int(4)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table book created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

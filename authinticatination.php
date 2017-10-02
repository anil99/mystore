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
$sql = "CREATE TABLE authintication (
password INT(6) PRIMARY KEY,
user  varchar(25)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

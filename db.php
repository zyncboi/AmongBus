<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amongbus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_POST['id'];
$capacity= $_POST['capacity'];

$sql = "UPDATE DRIVERS SET capacity='$capacity' WHERE driver_id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
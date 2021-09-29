<?php
$servername = "localhost";
$username = "db21_009";
$password = "db21_009";
$dbname = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!$conn->select_db($dbname)){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected!!!"
connection_close.php
$conn->close();
?>
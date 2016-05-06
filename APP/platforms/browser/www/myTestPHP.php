<?php
$servername = "www.nelsonwalkom.com";
$username = "nelso248";
$password = "5h8cj3bk";

$database = 'nelso248_testDataBase'

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
mysql_select_db($db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
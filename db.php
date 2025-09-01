<?php
$servername = "localhost"; // Change to your actual host if not local
$username = "unkuodtm3putf";
$password = "htk2glkxl4n4";
$dbname = "dbvaq24vlxu7dg";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

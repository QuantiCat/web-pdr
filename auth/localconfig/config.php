<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "3982393_pr";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
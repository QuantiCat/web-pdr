<?php
$dbServername = "fdb34.awardspace.net";
$dbUsername = "3982393_pr";
$dbPassword = "JJfm28!%1e?jV+(N";
$dbName = "3982393_pr";

$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);    
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
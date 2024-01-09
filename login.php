<?php
$servername = 'localhost';
$databasename = 'GPAdatastore';
$password = '';
$username = 'root';

$conn = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
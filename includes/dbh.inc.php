<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "labshop";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if  (!$conn) {
    die("connection failed: ".mysqli_connect_error());
}
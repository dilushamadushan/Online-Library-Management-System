<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbport = 3306;
$dbname = "library_management_system";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname, $dbport);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php

$servername = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Failed to connect with database: ".mysqli_connect_error());
}


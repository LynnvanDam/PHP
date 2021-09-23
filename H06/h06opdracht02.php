<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login formulier</title>

</head>
<body>

<?php

$servername = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";

try {  $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

</body>
</html>

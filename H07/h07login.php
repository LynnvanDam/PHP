<?php
session_start();

$users = array(
    "Lynn" => "1717",
    "Rianne" => "1616",
    "Raph" => "4004",
);

if (isset($_POST['button'])
            && isset($users[$_POST['username']])
            && $users[$_POST['username']] == $_POST['password']) {
    $_SESSION['user'] = $_POST['username'];
    $message = "Welkom ".$_SESSION['user'];
}   else {
    $message = "inloggen";
}

?>

<html>
<body>

<h2><?php echo $message ?></h2>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Username <input type="text" name="username" value="">
    Password <input type="password" name="password" value="">
    <input type="submit" name="button" value="verstuur">
</form>

<a href="h07website.php">website</a>

</body>
</html>

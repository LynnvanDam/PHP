<?php
session_start();

$users = array(
    "Lynn" => array("password" => "1717", "rol" => "Administrator"),
    "Rianne" => array("password" => "1616", "rol" => "Gebruiker"),
    "Raph" => array("password" => "4004", "rol" => "Administrator"),
);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST["button"])
            && isset($users[$_POST["username"]])
            && $users[$_POST["username"]] ["password"] == $_POST["password"]) {
    $_SESSION["user"] = array("naam" => $_POST["username"],
                              "password" => $users[$_POST["username"]] ["password"],
                              "rol" => $users[$_POST["username"]] ["rol"]);
    $message = "Welkom ".$_SESSION["user"] ["naam"]." met de rol "
                        .$_SESSION["user"] ["rol"];
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
<br>
<a href="h07login.php?loguit">uitloggen</a>
<br>
<a href="h07admin.php">admin site</a>

</body>
</html>

<?php
session_start();

if (isset($_SESSION["user"])) {
    echo "<h2>Welkom ".$_SESSION["user"] ["naam"]." op de website</h2>";
    echo "<p> <a href='h07login.php'>login</a> </p>";
} else {
    header('location: h07login.php');
}
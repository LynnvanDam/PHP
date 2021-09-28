<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h2>Welkom ".$_SESSION["user"] ["naam"]." op het admingedeelte van de website</h2>";
    echo "<p> <a href='h07login.php'>login</a> </p>";
} else {
    header('location: h07login.php');
}
<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "<h2>Welkom ".$_SESSION['user']." op de website";
} else {
    header('location: h07login.php');
}
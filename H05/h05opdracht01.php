<?php

if ($_POST['inlognaam'] == "") {
    echo "vul een naam in you big dumb";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier :)</a>";
}
if ($_POST['adres'] == "") {
    echo "vul een adres in dummy";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier :)</a>";
}
if ($_POST['email'] == "") {
    echo "vul een email in *deep sigh*";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier :)</a>";
}
if ($_POST['wachtwoord'] == "") {
    echo "vul een wachtwoord in";
    echo "<br> <a href='opdr01form1.html'>Terug naar formulier :)</a>";
}
    echo $_POST['inlognaam']."<br>";
    echo $_POST['adres']."<br>";
    echo $_POST['email'];

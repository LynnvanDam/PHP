<?php

$mail = $_POST['email'];
$password = $_POST['wachtwoord'];

if (inlog($mail,$password)) {
    echo "welkom!";
} else {
    echo "geen toegang";
}

function inlog($mail, $pass): bool {
    if ($mail == "piet@worldonline.nl" && $pass == "doetje123" ||
        $mail == "klaas@carpets.nl" && $pass == "snoepje777" ||
        $mail == "truushendriks@wegweg.nl" && $pass == "arkiearkie201"
    )    {return true;}
    else {return false;}
}
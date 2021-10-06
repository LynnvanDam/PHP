<?php

date_default_timezone_set('Europe/Amsterdam');
$tijd = date('h:i:s');

switch ($tijd) {
    case ($tijd > "06:00:00" && $tijd < "11:59:59"):
        echo "Goedemorgen!";
        break;
    case ($tijd > "12:00:00" && $tijd < "17:59:59"):
        echo "Goedemiddag!";
        break;
    case ($tijd > "18:00:00" && $tijd < "23:59:59"):
        echo "Goedenavond!";
        break;
    case ($tijd > "00:00:00" && $tijd < "05:59:59"):
        echo "Goedenacht!";
        break;
    default:
        echo "Hallo!";
}
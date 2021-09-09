<?php

function deelbaarDoorDrie($a) {
    if ($a % 3 == 0) {
        return "true";
    }
    else {
        return "false";
    }
    echo $a;
}

echo deelbaarDoorDrie(11);
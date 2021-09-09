<?php

function deelbaarDoorDrie($a) {
    if ($a % 3 == 0) {
        return "true";
    }
    else {
        return "false";
    }
}

echo deelbaarDoorDrie(12);
<?php


function celsiusNaarFahrenheit($a) {
    $b = ($a *(9 / 5)) + 32;
    echo $a." graden celsius is ".$b." graden fahrenheit";
}

echo celsiusNaarFahrenheit(2);
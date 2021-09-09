<?php

function reverse($a) {
    $b = "";
    $word = strlen($a) -1;
    for ($i = $word; $i >= 0; $i--) {
        $b .= $a[$i];
    }
    return $b;
}

echo reverse("ereht olleh");
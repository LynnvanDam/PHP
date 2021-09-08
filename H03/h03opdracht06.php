<style>
    #pic {
        width: 50px;
        length: 50px
    }
</style>

<?php

$sportclubs = array("De Spartelkuikens", "De Waterbuffels", "Plonsmderin", "Bommetje");
$leden = array(25, 32, 11, 23);

foreach ($leden as $vereniging) {
    $vereniging = floor($vereniging/5);
    echo "<br> <br>";

    for ($i = 0; $i < $vereniging; $i++) {
        echo "<img id='pic' src='pics/monke/aap1.jpg'>";
    }
}
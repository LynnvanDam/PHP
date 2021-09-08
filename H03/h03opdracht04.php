<style>
    .red {
        border: 2px red solid;
    }
    .blue {
        border: 2px blue solid;
    }
    img {
        width: 250px;
        length: 250px;
    }
    .center {
        text-align: center;
    }
</style>

<?php

echo "<div class='center'>";

for ($i = 1; $i <10; $i++) {
    if ($i % 2 == 0) {
        $t = 'red';
    }
    else {
        $t = 'blue';
    }
    echo "<img class='$t' src='pics/monke/aap".$i.".jpg'>";
}

echo "</div>";
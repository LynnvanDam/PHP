<?php

foreach ($_POST['dieren'] as $dier) {
    echo "<img src='images/".$dier.".jpg'>";
}
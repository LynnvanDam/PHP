<style>
    .hoi {
        text-align: center;
    }
</style>

<?php

echo "<div class='hoi'>";
for ($i = 0; $i < 9; $i++) {
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    echo "* <br>";
}
echo "</div>";
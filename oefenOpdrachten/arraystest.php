<?php

//$trees = array(
//    array("taiga", "spruce", "!"),
//    array("forest", "oak", " :D"),
//    array("savanna", "acacia", " ;)")
//);
//
//echo "You can find ".$trees[2][1]." trees in the ".$trees[2][0]." biome".$trees[2][2];



$trees = array("taiga" => "spruce", "forest" => "oak", "savanna" => "acacia", "roofed forest" => "dark oak");
foreach ($trees as $biome => $tree) {
echo "You can find the ".$tree." trees in the ".$biome." biome!";
echo "<br>";
}



//array_push($trees, "acacia");
//echo "I like ".$trees[2]." wood :D";
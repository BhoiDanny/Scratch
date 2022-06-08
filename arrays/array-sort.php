<?php

$names = ["Cypherios", "mandem", "Adam", "Eve"];

sort($names);

echo "<ul>";

foreach($names as $name){
    echo "<li>$name</li>";
}

echo "</ul>";

rsort($names);

echo "<ul>";

foreach($names as $name){
    echo "<li>$name</li>";
}

echo "</ul>";
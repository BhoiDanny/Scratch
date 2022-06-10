<?php

$string = "Accra, Kumasi, Achimota, CapeCoast";

$cities = explode(", ", $string);

sort($cities);

echo "<ol>";

foreach($cities as $city){
    echo "<li>$city</li>";
}

echo "</ol>";



array_push($cities, "Circle", "Tema", "Lapaz");


echo "<ol>";

foreach($cities as $city){
    echo "<li>$city</li>";
}

echo "</ol>";
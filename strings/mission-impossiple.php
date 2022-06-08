<?php

$string = "Rafher gung lbh orpbzr ";
$string .= "snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.";

$decoded = str_rot13($string);

echo $decoded;

echo  "<br>";

$string = "Hello there";

$encode = str_rot13($string);

echo $encode;

echo "<br>";

$string = "Uryyb gurer";

$decode = str_rot13($string);

echo $decode;

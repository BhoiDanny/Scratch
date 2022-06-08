<?php
//Rectangle
//Length X Width
$recLength = 10;
$recWidth = 5;
$reResults = $recLength * $recWidth;
echo $reResults;

echo "<br>";

//Triangle
//base X height / 2
$triBase = 12;
$triHeight = 3;

$triResult = ($triBase * $triHeight) / 2;

echo $triResult;

echo "<br>";

$cRadius = 5;
$cResult = pi() * pow($cRadius, 2);

echo $cResult;

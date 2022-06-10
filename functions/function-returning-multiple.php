<?php

function calculate($num1,$num2){
    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    return [$sum, $difference];
}

$result = calculate(3,5);

echo $result[0];
echo "<br>";
echo $result[1];
echo "<br>";

foreach($result as $item) {
    echo $item;
    echo "<br>";
}
//echo "<pre>";
//print_r($result);
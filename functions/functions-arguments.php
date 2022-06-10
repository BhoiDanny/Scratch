<?php

function multiply($num1, $num2){
    global $num3;
    $product = $num1 * $num2 * $num3;
    echo $product;
}

$num3 = 10;
multiply(2,12);

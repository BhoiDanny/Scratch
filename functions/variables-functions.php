<?php

function addTwoNumbers(){
    global $c;
    $a = 5;
    $b = 12;
    $sum = $a + $b + $c;
    echo $sum;
}

$c = 20;
addTwoNumbers();

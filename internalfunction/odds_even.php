<?php
//Generate number between a set limit
// If number is even echo "Number is even"
// If number is odd echo "Number os odd"

for ($i = 1; $i <= 10; $i++):
    $randomNumber = rand(1,30);
    if($randomNumber % 2 == 0):
        echo "The random number is even " . $randomNumber . "<br>";
    elseif($randomNumber % 2 == 1):
        echo "The random number is odd " . $randomNumber . "<br>";
    endif;
endfor;
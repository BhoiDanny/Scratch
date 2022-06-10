<?php

/*for ($i = 1; $i <= 50; $i++):
    $randomNumber = rand(1,3);

    echo $randomNumber . "<br>";
endfor;*/

$ones = 0;
$twos = 0;

for($i = 1; $i <=100; $i++):
    $randomNumber = rand(1, 2);
    if($randomNumber == 1):
        $ones++;
    else:
        $twos++;
    endif;
endfor;

echo "1 = " . $ones . "<br>";
echo "2 = " . $twos . "<br>";
echo "Sum = " . ($ones + $twos);
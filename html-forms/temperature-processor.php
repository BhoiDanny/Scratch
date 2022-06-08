<?php

if(isset($_POST['temp'])):
    $temp_value = trim($_POST['temperature']);
    $mode = trim($_POST['mode']);
    $accuracy = trim($_POST['accuracy']);
    if($mode == "C") {
        $temperature = ($temp_value - 32) * (5 / 9);
        $mode = "C";
    } else {
        $temperature = $temp_value * 9 / 5 + 32;
        $mode = "F";
    }
    $temperature = round($temperature, $accuracy);
    echo "Your converted temperature is $temperature&deg;$mode to $accuracy decimal places";
endif;

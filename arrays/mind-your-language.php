<?php

$string = "I love coding and programming at night and at dawn with a bad
           experience";

$bads = ["bad"];

foreach ($bads as $bad){
    $string = str_replace($bad, "*****", $string);
}

echo $string;
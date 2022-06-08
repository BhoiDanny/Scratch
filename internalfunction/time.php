<?php

$time = time();
echo $time . "<br>";

$date = strtotime("28th June 2022");
echo $date  . "<br>";

$seconds = $date - $time;

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = ceil($hours / 24);

echo "It is $days days until 28th June 2022";

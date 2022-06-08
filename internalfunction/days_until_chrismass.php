<?php

date_default_timezone_set("Africa/Accra");

$christmasDay  = strtotime("December 25th");

$currentTime = time();

$seconds = $christmasDay - $currentTime;

$minutes = $seconds / 60;

$hours = $minutes / 60;

$days = ceil($hours / 24);

echo "We have $days days until Christmas";
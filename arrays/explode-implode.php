<?php

$string = "Cypherios, Mandem, Ios, Sanny";

$exploded = explode(", ", $string);

echo "<pre>";

print_r($exploded);

$imploded = implode("|", $exploded);
echo $imploded;
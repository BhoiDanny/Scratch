<?php

echo date_default_timezone_get() . " = ";
echo date("Y l : g:i:a");

date_default_timezone_set("Africa/Accra");

echo "<br>" . date_default_timezone_get() . " = ";
echo date("l : g:i:a") ;
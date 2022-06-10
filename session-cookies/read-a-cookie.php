<?php

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
} else {
    echo "Cookie has not been set ";
}
<?php

if(isset($_COOKIE['name']) && isset($_COOKIE['age']) && isset($_COOKIE['favColor'])){
    $name = trim($_COOKIE['name']);
    $age = trim($_COOKIE['age']);
    $favColor = trim($_COOKIE['favColor']);

    echo "Your name is $name. <br>";
    echo "Your is age is $age. <br>";
    echo "Your favorite colour is $favColor. <br>";
} else {
    echo "Your cookie is not set";
}
<?php
if(isset($_POST['aboutMe'])){
    $name     = trim($_POST['name']);
    $age      = trim($_POST['age']);
    $favColor = trim($_POST['favoriteColor']);

    setcookie("name", $name, time() + 100) ;
    setcookie("age", $age, time() + 100) ;
    setcookie("favColor", $favColor, time() + 100) ;

    header("Location: about-me-retrieve.php");

}
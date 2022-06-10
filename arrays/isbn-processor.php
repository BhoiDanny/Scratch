<?php

//Check if form is submited

if(isset($_POST['submit'])){
    //Assign ISBN number
    $isbn = trim($_POST['isbn']);

//total, incrementor
    $total = 0;
    $i = 1;
//split string
    $digits = str_split($isbn);
//Loop through array
    foreach($digits as $digit){
        //update total
        $total += $digit * $i;
        $i++;
    }

//check if divisible by 11
    if($total % 11 == 0){
       echo "ISBN is Valid";
    } else{
        echo "ISBN is Invalid";
    }
//echo valid or invalid
}
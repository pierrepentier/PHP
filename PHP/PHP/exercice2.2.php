<?php
do{
    $a = readline ("Please enter a number :" );
    if(!is_numeric($a)) {
        echo "This is not a number !\n";
    }
}while(!is_numeric($a));

    echo "the square number of " . $a . " is " . $a * $a;
?>
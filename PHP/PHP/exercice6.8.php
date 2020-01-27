<?php

$choiceNumber=readline("How many values do you want to enter ?\n");

$positive=0;
$negative=0;
$tableau=array();
for($i=1; $i<=$choiceNumber; $i++ ){
    $value=readline("Enter value " . $i . " : ");
    $tableau[]=$value;
    if($value>0){
        $positive++;
    }
    elseif($value<0){
        $negative++;
    }
}

echo "There are " . $positive . " positive numbers and " . $negative . " negative numbers.";

?>
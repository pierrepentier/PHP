<?php

$choiceNumber=readline("How many values do you want to enter ?\n");

$positive=0;
$negative=0;
$tableau=array();
for($i=0; $i<=$choiceNumber - 1; $i++ ){
    $value=readline("Enter value " . ($i+1) . " : ");
    $tableau[]=$value;
    $tableau2[]=$tableau[$i] + 1;  
}
print_r($tableau2);



?>
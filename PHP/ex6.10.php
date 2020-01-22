<?php
$tableau1=array();
$tableau2=array();
$tableau3=array();
for($i=1; $i<=8; $i++){
    $valueTab1=readline("Please enter the value " . $i . " of the first array : ");
    $tableau1[]=$valueTab1;

    $valueTab2=readline("Please enter the value " . $i . " of the second array : ");
    $tableau2[]=$valueTab2;
    
    $tableau3[]=$valueTab1 + $valueTab2;
}
print_r($tableau3);
?>
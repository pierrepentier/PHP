<?php

$choice = readline("How many numbers do you want to enter?");

$tab[] = array();

for($i=0; $i <= $choice - 1; $i++){
    $number = readline("Please enter the number " . ($i+1) . " : ");
    $tab[$i] = $number;
}

print_r($tab);

$erase=readline("which case do you want to erase?");
unset($tab[$erase-1]);
$tab=array_values($tab);
print_r($tab);
?>
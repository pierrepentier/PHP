<?php

$choice = readline("How many numbers do you want to enter?");

$tab[] = array();

for($i=0; $i <= $choice - 1; $i++){
    $note = readline("Please enter the number " . ($i+1) . " : ");
    $tab[$i] = $note;
}

print_r($tab);

for($i=0; $i <= intdiv($choice, 2) - 1; $i++){

    $temp = $tab[$i];
    $tab[$i] = $tab[$choice -($i+1)];
    $tab[$choice - ($i+1)]=$temp;
}

print_r($tab);
?>
<?php
$choice = readline("How many numbers do you want to enter?");

$tab[]=array();

for($i=0; $i <= $choice - 1; $i++){
    $note = readline("Please enter the number " . ($i+1) . " : ");
    $tab[$i] = $note;
}

print_r($tab);

for($i=0; $i <= $choice - 2; $i++){
    for($j=$i+1; $j <= $choice - 1; $j++){
        if($tab[$i]<$tab[$j]){
            $temp=$tab[$i];
            $tab[$i]=$tab[$j];
            $tab[$j]=$temp;
        }
    }
}

print_r($tab);
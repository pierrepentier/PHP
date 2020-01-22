<?php
$choice = readline("How many numbers do you want to enter?");

$tab[]=array();

for($i=0; $i <= $choice - 1; $i++){
    $note = readline("Please enter the number " . ($i+1) . " : ");
    $tab[$i] = $note;
}

print_r($tab);

do{
    for($i=0; $i <= $choice - 2; $i++){
            if($tab[$i]<$tab[$i+1]){
                $temp=$tab[$i];
                $tab[$i]=$tab[$i+1];
                $tab[$i+1]=$temp;
                $change= true;
            }
            else{
                $change=false;
            }
    }
}while($change=true);

print_r($tab);
<?php
$numbernotes = readline("How many notes do you want to enter?");

$sum = 0;
$tab[]=array();

for($i=0; $i <= $numbernotes - 1; $i++){
    $note = readline("Please enter the note " . ($i+1) . " : ");
    $tab[$i] = $note;
    $sum+=$note;
    $average = $sum/($i+1);    
}
$count = 0;
for($i=0; $i <= $numbernotes - 1; $i++){
    if($tab[$i] > $average){
        $count++;
    }
}
echo "the average note is : " . $average . "\nThere is/are $count note(s) above the average.";
?>

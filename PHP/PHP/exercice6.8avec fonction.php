<?php
function positiveNegative($choiceNumber){

$positive=0;
$negative=0;

for($i=1; $i<=$choiceNumber; $i++ ){
    $value=readline("Enter value " . $i . " : ");
    if($value>0){
        $positive++;
    }
    elseif($value<0){
        $negative++;
    }
}
return ($positive);
}

$choice=readline("How many values do you want to enter ?\n");
$result=positiveNegative($choice);
echo "There are " . $result . " positive numbers.";
?>


<?php
$tab=array();
do{
    $number=readline("Add a number to the array : ");
    $addAgain=readline("Do you want to add another number ? type anything to continue or press N to stop adding numbers : ");
    $tab[]=$number;
}while($addAgain!="n");

$counter=0;
for($i=0; $i <= count($tab) - 2; $i++){
    if($tab[($i+1)]!=$tab[$i]+1){
        $counter+=$counter++;
    }
}

if($counter!=0){
    echo "Numbers are not consecutive";
}
else{
    echo "Numbers are consecutive";
}
?>
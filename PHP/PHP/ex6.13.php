<?php
$max=0;
for($i=0; $i <= 4; $i++){
    $number=readline("Please enter the number " . ($i+1) . " : ");
    $tab[]=$number;
    if($tab[$i]>$max){
        $max=$tab[$i];
        $position= $i+1;
    }
}
echo "The biggest value is " . $max . " and the position is $position";
?>
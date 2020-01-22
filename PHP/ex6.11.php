<?php
$tab1 = array(4,8,7,12);
$tab2 = array(3,6);
$result = 0;

for($i=0; $i<=1; $i++){
    for($j=0; $j<=3; $j++){
        $result+=$tab1[$j] * $tab2[$i];
    }
}

echo "Le schtroumpf est : " . $result;
?>
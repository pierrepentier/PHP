<?php
function calculerSomme($array,$choice){
$array = array();
$somme=0;
for ($i = 1; $i<=$choiceNumber; $i++)
{
    $number=readline("Please enter value " . $i . " : ");
    $array[] = $number ;
    $somme+= $number;
}
return $somme;
}

$choice=readline("How many values do you want to enter ?\n");
calculerSomme($array,$choice);
echo "The sum of these numbers is : " . $somme;
?>

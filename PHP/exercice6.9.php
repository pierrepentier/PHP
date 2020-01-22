<?php
$choiceNumber=readline("How many values do you want to enter ?\n");

$array = array();
$somme=0;
for ($i = 1; $i<=$choiceNumber; $i++)
{
    $number=readline("Please enter value " . $i . " : ");
    $array[] = $number ;
    $somme+= $number;
}
echo "The sum of these numbers is : " . $somme;
print_r($array);
?>
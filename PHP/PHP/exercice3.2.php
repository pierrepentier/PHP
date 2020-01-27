<?php
function afficherProduit($variable1,$variable2){
    if($variable1==0 || $variable2==0){
            echo "le produit est nul, comme toi ! ";
        }
        if(($variable1<0 xor $variable2<0)&&($variable1>0 xor $variable2>0)){
            echo "le produit est negatif";
        }
        if($variable1>0 && $variable2>0 || $variable1<0 && $variable2<0){
            echo "le produit est positif";
        } 
}

function controlNumber($variable){
while (!is_numeric($variable)) {
    $variable = readline("on t'a dit des chiffres connard, recommence !");
}
return $variable;
}

$a=readline("entrez le nombre 1 : ");
controlNumber($a);
$b=readline("entrez le nombre 2 : ");
controlNumber($b);
afficherProduit($a,$b);
?>
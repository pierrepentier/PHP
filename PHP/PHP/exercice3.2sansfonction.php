<?php
do{
    $a=readline("entrez le nombre 1 : ");
    $b=readline("entrez le nombre 2 : ");
    if(!is_numeric($a) || !is_numeric($b)){
        echo "on t'a dit des chiffres connard, recommence !";
        echo "\n";
    }
    else{
        if($a==0 || $b==0){
            echo "le produit est nul, comme toi ! ";
        }
        if(($a<0 xor $b<0)&&($a>0 xor $b>0)){
            echo "le produit est negatif";
        }
        if($a>0 && $b>0 || $a<0 && $b<0){
            echo "le produit est positif";
        }
    }
}while(!is_numeric($a) || !is_numeric($b))
?>
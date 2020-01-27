<?php
do{
    $priceHT = readline("Veuillez entrer le prix hors taxe : \n");
    $number = readline("Veuillez entrer la quantité : \n");
    $tva = readline("Veuillez indiquer la tva en % : \n");
    
    if(!is_numeric($priceHT) || !is_numeric($number) || !is_numeric($tva)){
        echo "Enter valid numbers  \n";
    }
    else {
        $prixtotal = $priceHT * $number * (1 + (($tva)/100));
    }

}while(!is_numeric($priceHT) || !is_numeric($number) || !is_numeric($tva));

echo "Le prix total est de " . $prixtotal . " euros";
?>
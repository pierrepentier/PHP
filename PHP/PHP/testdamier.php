<?php

$nombreLignes=readline("Combien de lignes souhaitez-vous pour votre damier ? ");
$nombreColonnes=readline("Combien de colonnes souhaitez-vous pour votre damier ? ");

for($i=0; $i <= $nombreLignes - 1; $i++){
    for($j=0; $j <= $nombreColonnes - 1; $j++){
        $tab[$i][$j] = "       ";
    
    }
}

$curseur = "   X   ";
$vide = "        ";
//$tab[colonne][ligne] = $curseur;
$letter=range("A","Z");
echo " ";
for($k=0; $k <=$nombreColonnes - 1 ; $k++){
    echo " ___" . ($k+1) . "___";
}
echo "\n";

for($i=0; $i <= $nombreLignes - 1 ; $i++){
    echo " ";
    for($j=0; $j <= $nombreColonnes - 1; $j++){
        echo"|       ";
    }
        echo "|";
        echo "\n";
        echo $letter[$i];
    for($j=0; $j <= $nombreColonnes - 1; $j++){
        echo"|" . $tab[$i][$j];
    }
        echo "|";
        echo "\n";
        echo " ";

    for($j=0; $j <= $nombreColonnes - 1; $j++){
        echo"|_______";
    }
    echo"|";
    echo "\n";
       
}

//print_r($tab);

echo("Choisissez la position de départ !\n");
$y=readline("Ligne : ");
$x=readline("Colonne : ");





?>
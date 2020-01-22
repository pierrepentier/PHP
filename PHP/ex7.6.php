<?php
$tab = array();
$max=0;
$min=21;
$nombreEleves=readline("Entrez le nombre d'èleves : ");
$somme=0;
for($i=0; $i <= $nombreEleves -1; $i++){
    $eleve=readline("Entrez le nom de l'élève " . ($i+1) . " : ");
    $note=readline("Entrez la note de l'élève " . ($i+1) . " : ");
    $tab[$eleve] = $note;

    $somme+=$note;
    if($note > $max){
        $max=$note;
        $countMax=$eleve;
    }
    elseif($note < $min){
        $min=$note;
        $countMin=$eleve;
    }
}

print_r($tab);

$moyenne=$somme/$nombreEleves;

echo "La meilleure note est $max, elle a été obtenue par $countMax et la plus mauvaise note est $min et a été obtenue par $countMin\n\n";
echo "La moyenne est de $moyenne\n\n";

foreach($tab as $key => $value){
    if($value>=$moyenne){
        echo "$key a obtenu une note au dessus de la moyenne\n\n";
    }
    elseif($value<$moyenne){
        echo "$key a obtenu une note inférieure à la moyenne\n\n";
    }
}
?>
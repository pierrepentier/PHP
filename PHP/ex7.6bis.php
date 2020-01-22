<?php
$tab = array();
$max=0;
$min=21;
$nombreEleves=readline("Entrez le nombre d'èleves : ");
$sommeMoyenne=0;

for($i=0; $i <= $nombreEleves -1; $i++){
    $eleve=readline("Entrez le nom de l'élève " . ($i+1) . " : ");
    $nombreNotes=readline("Combien de notes pour cet élève ? ");

    $sommeEleve=0;
    $tabnote=array();
    for($j=0; $j <= $nombreNotes - 1; $j++){
        $note=readline("Entrez la note " . ($j +1) . " de l'élève " . ($i+1) . " : ");
        $nameNote=$j +1;
        $tabnote[$nameNote]=$note;
        $tab[$eleve] = $tabnote;
        $sommeEleve+=$note;
    }
    $moyenneEleve=$sommeEleve/$nombreNotes;

    if($moyenneEleve > $max){
        $max=$moyenneEleve;
        $eleveMax=$eleve;
    }
    if($moyenneEleve < $min){
        $min=$moyenneEleve;
        $eleveMin=$eleve;
    }

    $sommeMoyenne+=$moyenneEleve;
}

print_r($tab);


$moyenneClasse=$sommeMoyenne/$nombreEleves;

echo "La meilleure moyenne est $max, elle a été obtenue par $eleveMax et la plus mauvaise moyenne est $min et a été obtenue par $eleveMin\n\n";
echo "La moyenne de la classe est de $moyenneClasse \n\n";


foreach($tab as $key => $value){
    $sommeNote=0;
    foreach($value as $note){
        $sommeNote+=$note;
    }
    $moyenneNote=$sommeNote/count($value);
    
    if($moyenneNote >= $moyenneClasse){
        echo "$key a obtenu une moyenne de $moyenneNote, c'est au dessus de la moyenne de la classe " . "(" . round($moyenneClasse, 2) . ")\n\n";
    }
    if($moyenneNote < $moyenneClasse){
        echo "$key a obtenu une moyenne de $moyenneNote, c'est inférieur à la moyenne de la classe " . "(" . round($moyenneClasse, 2) . ")\n\n";
    }
}

?>
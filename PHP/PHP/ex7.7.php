<?php
$tabMatricules=array();
$min=21;
$max=0;
$sommeMoyennes=0;
$numberEleves=readline("Combien d'élèves souhaitez-vous enregistrer dans la base de données ? ");

for($i=0; $i <=$numberEleves - 1; $i++){
    $matricule=readline("Veuillez entrer le matricule de l'élève " . ($i+1) . " : ");
    $prenom=readline("Veuillez entrer le prénom de l'èleve " . ($i+1) . " : ");
    $nom=readline("Veuillez entrer le nom de l'èleve " . ($i+1) . " : ");

    $tabMatricules[$matricule]=array("prenom" => $prenom, "nom" => $nom);

    $nombreNotes=readline("Combien de notes souhaitez-vous entrer pour cet élève ? ");
    $tabNotes=array();
    $sommeNotes=0;

    for($j=0; $j <= $nombreNotes - 1; $j++){

        $note = readline("Entrez la note " . ($j +1) . " de l'élève " . ($i+1) . " : ");

        $nameNote = $j +1;
        $tabnotes[$nameNote] = $note;
        $sommeNotes += $note;
    }

    $tabMatricules[$matricule]["notes"] = $tabnotes;
    $moyenneEleve = $sommeNotes/$nombreNotes;

    if($moyenneEleve > $max){
        $max = $moyenneEleve;
        $prenomMax = $prenom;
        $nomMax = $nom;
    }
    if($moyenneEleve < $min){
        $min = $moyenneEleve;
        $prenomMin = $prenom;
        $nomMin = $nom;
    }

    $sommeMoyennes += $moyenneEleve;
}

print_r($tabMatricules);
        
$moyenneClasse = ($sommeMoyennes/$numberEleves);

echo "La meilleure moyenne est " . round($max, 2) . ", elle a été obtenue par $prenomMax $nomMax et la plus mauvaise moyenne est $min et a été obtenue par $prenomMin $nomMin\n\n";
echo "La moyenne de la classe est de " . round($moyenneClasse, 2) . "\n\n";


foreach($tabMatricules as $key => $value){
    foreach($value as $key2 => $info){
        $sommeNote = 0;

        if($key2 == "notes"){
            foreach($info as $note){
                $sommeNote+=$note;
                echo $sommeNote . "\n";
            }
            $moyenneNote=$sommeNote/count($info);
            
            if($moyenneNote >= $moyenneClasse){
                echo "L'élève matricule [$key] a obtenu une moyenne de " . round($moyenneNote, 2) . " : c'est au dessus de la moyenne de la classe " . "(" . round($moyenneClasse, 2) . ")\n\n";
            }
            if($moyenneNote < $moyenneClasse){
                echo "L'élève matricule [$key] a obtenu une moyenne de " . round($moyenneNote, 2) . " : c'est inférieur à la moyenne de la classe " . "(" . round($moyenneClasse, 2) . ")\n\n";
            }
        }
    }
}

?>
    


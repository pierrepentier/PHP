<?php
$dictionnaire=array(
    "camion"=>"gros véhicule pour transporter des trucs",
    "moto"=>"petit vehiule motorisé à 2 roues",
    "velo"=>"syn : bicyclette",
    "voiture"=>"vehicule de taille moyenne à 4 roues");

echo "Voici la liste de mots :\n";
print_r(array_keys($dictionnaire));

do{
    $recherche=readline("De quels mot souhaitez-vous connaître la définition ? : "); 

    if($recherche != "camion" && $recherche != "moto" && $recherche != "velo" && $recherche != "voiture" || is_numeric($recherche)){
        echo "Ce mot n'est pas dans la liste !! Veuillez choisir un mot présent dans la liste.\n";
    }
}while($recherche!="camion" && $recherche!="moto" && $recherche!="velo" && $recherche!="voiture" || is_numeric($recherche));
echo $dictionnaire[$recherche];
?>






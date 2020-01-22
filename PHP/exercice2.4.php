<?php
for($i=0; $i<=3; $i++){
    $tableau=array("belle marquise ", "vos beaux yeux me font ", "mourir ", "d'amour ");
    shuffle($tableau);
    foreach($tableau as $valeur){
        echo $valeur;
    }
    echo "\n";
}
?>



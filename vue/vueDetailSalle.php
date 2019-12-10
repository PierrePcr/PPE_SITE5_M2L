<?php
    for($i=0; $i < $listeDetail; $i++)
    {
        if ( $listeDetail[$i]['nSalle'] == $idS) {
            $nomSalle = $listeDetail[$i]['nomSalle'];
            $nbPoste = $listeDetail[$i]['nbPoste'];
            $indIP = $listeDetail[$i]['indIP'];
            break;
        }
    }
?>

<div class="text-left">
    <a href="./?action=profil"><img src="images/retour232.png" alt="profil"></a>
</div>

<div class="text-center">
    <h1> <?= "Les postes de la ",$nomSalle ?> </h1>
</div>




<?php
for ($i = 0; $i < count($listeDetail); $i++) 
{
    if($listeDetail[$i]["nSalle"] == $idS){
        ?>
    <div class="card">
        <div class="descrCard"> 
            <?php for ($j = 0; $j < count($listeDetailPoste); $j++) 
            {
                if($listeDetail[$i]["nomSalle"] == $listeDetailPoste[$j]["nomSalle"]) 
                {?>
                    <h3><?= "Le ",$listeDetailPoste[$j]["nomPoste"]," possède :"; ?></h3> 
                    <?= "Numéro De Poste : ",$listeDetailPoste[$j]["nPoste"];?> <br/>
                    <?= "IP : ",$listeDetailPoste[$j]["indIP"], "." , $listeDetailPoste[$j]["ad"];?> <br/>
                    <?= "Type Poste : ",$listeDetailPoste[$j]["typePoste"];?> <br/><br/><br/><?php
                }
            }
            ?>
        </div>
    </div>
    <?php
    }
}
?>


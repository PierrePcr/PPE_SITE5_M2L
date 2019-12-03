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
<h1> <?= "La ",$nomSalle, " possède ", $nbPoste, " postes a l'adresse IP: ", $indIP ?> </h1>



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
                    <h3><?= " ",$listeDetailPoste[$j]["nomPoste"]," :"; ?></h3> <br/>
                    <?= "Numéro De Poste : ",$listeDetailPoste[$j]["nPoste"];?> <br/>
                    <?= "IP : ",$listeDetailPoste[$j]["indIP"], "." , $listeDetailPoste[$j]["ad"];?> <br/>
                    <?= "Type Poste : ",$listeDetailPoste[$j]["typePoste"];
                }
            }?>
            <br />
        </div>
    </div>
    <?php
    }
}
?>


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
    for($i=0; $i < $nbPoste; $i++)
    {
    ?>
        <div class="card">
            <div class="descrCard">
                   
                <?= $listePoste[$j]["nomPoste"];?>
                       
            </div>
        </div>
    <?php
    }
?>



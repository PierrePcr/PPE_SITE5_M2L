<h1>Liste des Salles Informatiques</h1>
<?php
for ($i = 0; $i < count($listeSalle); $i++) 
{
    ?>
    <div class="card">
        <div class="descrCard"><?= "<a href='./?action=detail&nSalle=" . $listeSalle[$i]['nSalle'] . "'>" . $listeSalle[$i]['nomSalle'] . "</a>"; ?>
            <br />
            <?= "Il y a ",$listeSalle[$i]["nbPoste"], " postes dans la salle :" ?>
            <br />
            
            <?php
            for ($j = 0; $j < count($listePoste); $j++)
            {

                if($listeSalle[$i]["nomSalle"] == $listePoste[$j]["nomSalle"])
                {
                    ?> <br />
                    <?= $listePoste[$j]["nomPoste"];?>
                    <?php
                }
            }?>
            <br />
            <br />
            <?= "l'IP est : ",$listeSalle[$i]["indIP"];?>
            <br />
        </div>
    </div>
    <?php
}
?>
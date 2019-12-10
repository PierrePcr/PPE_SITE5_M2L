<div class="text-center">
    <h1 id="titreColor">Liste des Salles Informatiques</h1>
</div>



<br />
<?php

for ($i = 0; $i < count($listeSalle); $i++) 
{
    ?>

  <div class="container">
    <div class="card">
        <div class="col-md-auto">
        <div class="descrCard" >
            <element onmouseover="myScript">
            <div class="text-center">
                <div class="btn btn-dark ">
                    <?= "<a href='./?action=detail&nSalle=" . $listeSalle[$i]['nSalle'] . "' >" . $listeSalle[$i]['nomSalle'] . "</a>"; ?>
                </div>
            </div>
            <br />
            <?//= "Il y a ",$listeSalle[$i]["nbPoste"], " postes dans la salle :" ?>
            
            
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
            <br /><br />
        </div>
    </div>
    </div>
</div>
<br />

    <?php
}?>

<script>
document.getElementById("titreColor").addEventListener("mouseover", mouseOver);
document.getElementById("titreColor").addEventListener("mouseout", mouseOut);

function mouseOver() {
  document.getElementById("titreColor").style.color = "green";
}

function mouseOut() {
  document.getElementById("titreColor").style.color = "black";
}
</script>
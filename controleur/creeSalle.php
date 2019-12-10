<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";
include "$racine/modele/bd.salle.inc.php";


// POUR LE DEBUG
/*echo $_POST["nPoste"];
echo"<br />";
echo $_POST["nomPoste"];
echo"<br />";
echo $_POST["indIP"];
echo"<br />";
echo $_POST["ad"];
echo"<br />";
echo $_POST["typePoste"];
echo"<br />";
echo $_POST["nSalle"];*/


// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["nPoste"]) && isset($_POST["nomPoste"]) && isset($_POST["indIP"]) && isset($_POST["ad"]) && isset($_POST["typePoste"]) && isset($_POST["nSalle"])){
    $nPoste=$_POST["nPoste"];
    $nomPoste=$_POST["nomPoste"];
    $indIP=$_POST["indIP"];
    $ad=$_POST["ad"];
    $typePoste=$_POST["typePoste"];
    $nSalle=$_POST["nSalle"];

    

    // traitement si necessaire des donnees recuperees
    
    // appel à la fonction pour récupérer les salles


    $listeSalle = getSalles();
    $listePoste = getPostes();    


    createPoste($nomPoste, $typePoste, $nSalle, $nPoste)

    //creerPoste($nPoste, $nomPoste, $indIP, $ad, $typePoste, $nSalle);



    ?>
     <!--<div class="alert alert-success alert-dismissable" role="alert">
      Compte crée avec succés !
    </div>

    <div class="fullscreen">
      <div class="col-sm-6">
        <div class="myAlert-bottom alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Indicates a successful or positive action.
        </div>
      </div>
    </div>-->

<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 20px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <strong class="mr-auto"><?php echo $nPoste ;?> alias <?php echo $nomPoste ;?> enregistré avec succés!</strong>
      <small>1 sec ago</small>
    </div>
  </div>
</div>



    
    <?php
}
else
{

  $nPoste="";
  $nomPoste="";
  $indIP="";
  $ad="";
  $typePoste="";
  $nSalle="";
  ?>
  <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 20px;">
    <div class="toast" style="position: absolute; top: 0; right: 0;">
      <div class="toast-header">
        <strong class="mr-auto">Pas de nouveaux postes enregistrés !</strong>
        <small>1 sec ago</small>
      </div>
    </div>
  </div>
<?php
}


$titre = "Cree un poste";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCreeSalle.php";
include "$racine/vue/pied.html.php";
?>
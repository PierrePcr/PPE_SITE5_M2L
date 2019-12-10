<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.salle.inc.php";

    $listeSalle = getSalles();
    $listePoste = getPostes();
    $listeType = getTypes();

if (isset($_POST["nPoste"]) && isset($_POST["nomPoste"]) && isset($_POST["typePoste"]) && isset($_POST["nSalle"]) && isset($_POST["nPosteModifier"]))
{
    
    $nomPoste=$_POST["nomPoste"];
    $typePoste=$_POST["typePoste"];
    $nSalle=$_POST["nSalle"];
    $nPoste=$_POST["nPoste"];
    $nPosteModifier=$_POST["nPosteModifier"];


// traitement si necessaire des donnees recuperees
    
    // appel à la fonction pour récupérer les salles


    /*            // POUR LE DEBUG
    echo $_POST["nomPoste"];
    echo"<br />";
    echo $_POST["typePoste"];
    echo"<br />";
    echo $_POST["nSalle"];   
    echo"<br />";
    echo $_POST["nPoste"];
    echo"<br />";
    echo $_POST["nPosteModifier"];
    echo"<br />";
    echo"<br />";*/

    updatePoste($nomPoste, $typePoste, $nSalle, $nPoste, $nPosteModifier);


    ?>
     

    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 20px;">
      <div class="toast" style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
          <strong class="mr-auto"><?php echo $nPoste ;?> alias <?php echo $nomPoste ;?> modifié avec succés !</strong>
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
    $typePoste="";
    $nSalle="";

      
    ?>
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 20px;">
        <div class="toast" style="position: absolute; top: 0; right: 0;">
          <div class="toast-header">
            <strong class="mr-auto">Pas de nouvelle modification de poste !</strong>
            <small>1 sec ago</small>
          </div>
        </div>
    </div>
    <?php
    }


$titre = "Modifier des postes";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueModifierSalle.php";
include "$racine/vue/pied.html.php";
?>










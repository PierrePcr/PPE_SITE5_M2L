<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

 

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mailU"]) && isset($_POST["mdpU"]) && isset($_POST["nomU"])){
    $mailU=$_POST["mailU"];
    $mdpU=$_POST["mdpU"];
    $nomU=$_POST["nomU"];
    // traitement si necessaire des donnees recuperees
    addUtilisateur($nomU,$mailU,$mdpU);

    ?>



    <div class="alert alert-success" role="alert">
      Compte crée avec succés !
    </div>

    <?php
}
else
{
    $mailU="";
    $mdpU="";
    $nomU="";
    ?>
    <div class="alert alert-danger" role="alert">
      Echec de la création du compte
    </div>
    <?php
}

 

// l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
// appel du script de vue 
$titre = "inscription";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueInscription.php";
include "$racine/vue/pied.html.php";
?>
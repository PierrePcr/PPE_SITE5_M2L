<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.salle.inc.php";
include_once "$racine/modele/bd.photo.inc.php";

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeSalle = getSalle();
$listePoste = getPoste();



// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des salles informatiques";

include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeSalle.php";
include "$racine/vue/pied.html.php";

?>
<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.salle.inc.php";


$listeSalle = getSalles();
$listePoste = getPostes();




$titre = "Liste des salles informatiques";

include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeSalle.php";
include "$racine/vue/pied.html.php";

?>
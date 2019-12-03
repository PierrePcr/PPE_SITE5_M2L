<?php
  if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
      $racine = "..";
  }

  include "$racine/modele/bd.salle.inc.php";

  
  //modifierPoste($nPoste, $nSalle);

  
  $titre = "Modifier poste";
  include "$racine/vue/entete.html.php";
  include "$racine/vue/vueModifierSalle.php";
  include "$racine/vue/pied.html.php";
?>
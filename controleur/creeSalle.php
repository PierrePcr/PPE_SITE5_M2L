  <?php

  if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
      $racine = "..";
  include "$racine/modele/bd.salleUpdate.inc.php";


  //$salles = getSalle();
  //$typePc = getTypePc();

  $checkCreeNewPost = false;

  


  if(isset($_POST["newPostName"]) && isset($_POST["newPostIndIP"]) && isset($_POST["newPostAd"]) && isset($_POST["newPostTypePoste"]) && isset($_POST["newPostNSalle"])){

    $newPostName = htmlentities($_POST["newPostName"]);
    $newPostIndIP = htmlentities($_POST["newPostIndIP"]);
    $newPostAd = htmlentities($_POST["newPostAd"]);
    $newPosttypePoste = htmlentities($_POST["newPostTypePoste"]);
    $newPostNSalle = htmlentities($_POST["newPostNSalle"]);

    //$idUser = $user['id'];

    $checkCreeNewPost = creePost($namePost, $salleVal, $typePost, $idUser);

  }
  else
  {
    echo "pas d'enregistrement";
  }


  $titre = "Cree un poste";
  include "$racine/vue/entete.html.php";
  include "$racine/vue/vueCreeSalle.php";
  include "$racine/vue/pied.html.php";

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title><?php echo $titre ?></title>
        <style type="text/css">
            @import url("css/base.css");
            @import url("css/form.css");
            @import url("css/corps.css");

            @import url("css/main.css");
            @import url("css/util.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

        <link rel="icon" type="image/png" href="images/icons/icons8-film-64.png"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body>
    <nav>
            

        <ul id="menuGeneral">

            <?php if(isLoggedOn()){ ?>
                <header><marquee bgcolor="green" />🚁==[ Vous etes connectés, Bienvenue a vous a la Maison des Ligues de Lorraines ] ==✈️</marquee></header>
            <?php } 
            else{ ?>
                <header><marquee bgcolor="orange" />🚁==[ Rejoignez nous des maintenant en vous connectant ! ] ==✈️</marquee></header>
            <?php } ?>


            <li><a href="./?action=accueil"><img src="images/accueil232.png" alt="imgAccueil" /> Accueil</a></li> 
            <li></li>      
            <li><a href="./?action=creeSalle"><img src="images/plus232.png" alt="imgCreeSalle+" /> Crée Poste </a></li>
              
            <li id="logo"><a href="./?action=accueil"><img src="images/logoM2l-red60.jpg" alt="logoM2l" /></a></li>

            <li><a href="./?action=modifierSalle"><img src="images/modifier232.png" alt="imgModifierSalle" /> Modifier Poste</a></li>
            
            <li></li> 

            <?php if(isLoggedOn()){ ?>
            <li><a href="./?action=profil"><img src="images/profil232.png" alt="profil" /> Mon Profil</a></li>

            <?php } 
            else{ ?>
                <li><a href="./?action=connexion"><img src="images/profil232.png" alt="connexion" /> Connexion</a></li>
            <?php } ?>

        </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
        <div></div>
    </div>
     
    <ul id="menuContextuel">
        <li><img src="images/logoM2l-red.jpg" alt="logoM2l" /></li>
    </ul>
    
    <div id="corps">
<div class="text-center">
    <h1 id="titreColor">Modifier un poste</h1>
</div>



<br />

 <!--// FORMULAIRE MODIF POSTE \\ -->

<form action="./?action=modifierSalle" method="POST">

	 <!--// Nom Poste Modif POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect1">Choisis ton poste : </label>
        <select class="form-control" id="exampleFormControlSelect1" name="newPostIndIP">

            <?php
            for ($i = 0; $i < count($listePoste); $i++) {
                echo $listePoste[$i]['nPoste'];?>

                        <option><?php echo $listePoste[$i]['nPoste']." | ".$listePoste[$i]['nomPoste']." | ".$listePoste[$i]['typePoste']?> </option>
                <?php } ?>

        </select>
    </div>


    <!--// NUMERO du POSTE a modifier \\-->
    <div class="form-group" >
        <label for="exampleFormControlInput1">Numero du poste à modifier : </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="p13" name="nPoste" size="15">
    </div>



    <br />
    <div class="col-xs-12"><hr></div>
    <br />



    <!--// Nouveau NUMERO Modif POSTE \\-->
    <div class="form-group" >
        <label for="exampleFormControlInput1">Nouveau numéro de poste : </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="p13" name="nPosteModifier" size="15">
    </div>


    <!--// Nouveau NOM Modif POSTE \\-->
    <div class="form-group" >
        <label for="exampleFormControlInput1">Nouveau nom de poste : </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="poste 13" name="nomPoste" size="15">
    </div>


    <!--// Nouveau typePoste Modif POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect1">Choisis son nouveau type : </label>
        <select class="form-control" id="exampleFormControlSelect1" name="typePoste">
            <?php
            for ($i = 0; $i < count($listeType); $i++) {
                ?>
                        <option><?php echo $listeType[$i]['typeLP'] ?> </option>
                <?php } ?>
        </select>
    </div>
    



    <!--// Nouveau nSalle Modif POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect1">Choisis sa nouvelle salle : </label>
        <select class="form-control" id="exampleFormControlSelect1" name="nSalle">
            <?php
            for ($i = 0; $i < count($listeSalle); $i++) {?>
                    <option><?php echo $listeSalle[$i]['nSalle'] ?> </option>
            <?php } ?>
        </select>
    </div>
    <input type="submit" name="buttonModifierPost" class="btn btn-success">
</form>


<script>
    document.getElementById("titreColor").addEventListener("mouseover", mouseOver);
    document.getElementById("titreColor").addEventListener("mouseout", mouseOut);

    function mouseOver() {
      document.getElementById("titreColor").style.color = "Green";
    }

    function mouseOut() {
      document.getElementById("titreColor").style.color = "black";
    }
</script>
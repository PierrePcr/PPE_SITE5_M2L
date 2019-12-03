<!-- // FORMULAIRE MODIF POSTE \\-->





<form action="./?action=modifierSalle" method="POST">

	<!-- // Nom Poste Modif POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect1">Selectionne un poste : </label>
        <select class="form-control" id="exampleFormControlSelect1" name="newPostIndIP">

            <?php
        	/*foreach($salles as $uneSalle => $salle) {
        		 ?> <option value="<?= $salle->nSalle?>"> <?=$salle->nomSalle?> </option>;
        		 <?php
        	} */?>

        </select>
    </div>












    <!-- // Nouveau NOM Modif POSTE \\-->
    <div class="form-group" >
        <label for="exampleFormControlInput1">Nouveau nom du poste : </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="poste 13" name="newPostName" size="15">
    </div>

	<!--
    <div class="form-group">
        <label for="exampleFormControlSelect1">Selectionne un poste : </label>
        <select class="form-control" id="exampleFormControlSelect1" name="newPostIndIP">
            <option>xxxxx</option>
            
        </select>
    </div>

    
    <div class="form-group">
        <label for="exampleFormControlSelect1">Selectionne un poste : </label>
        <select class="form-control" id="exampleFormControlSelect1" name="newPostIndIP">
            <option>xxxxx</option>
        </select>
    </div>
    -->
    
    <input type="submit" name="buttonModifierPost">
</form>
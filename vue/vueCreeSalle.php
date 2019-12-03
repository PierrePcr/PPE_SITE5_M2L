<!-- // FORMULAIRE AJOUT POSTE \\-->

<form action="./?action=creeSalle" method="POST">

    <!-- // NOM NEW POSTE \\-->
    <div class="form-group" >
        <label for="exampleFormControlInput1">Nom Poste</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="poste 13" name="newPostName" size="15">
    </div>
  
    <!-- // INDIP NEW POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect1">indIP</label>
        <select class="form-control" id="exampleFormControlSelect1" name="newPostIndIP">
            <option>130.120.80</option>
            <option>130.120.81</option>
            <option>130.120.82</option>
        </select>
    </div>

    <!-- // AD NEW POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlInput1">AD</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="8" name="newPostAd" size="15">
    </div>

    <!-- // TYPEPOSTE NEW POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect2">Type de Poste</label>
        <select multiple class="form-control" id="exampleFormControlSelect2" name="newPostTypePoste">
            <option>TX</option>
            <option>UNIX</option>
            <option>PCNT</option>
            <option>PCWS</option>
            <option>NULL</option>
        </select>
    </div>

    <!-- // NSALLE NEW POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlInput1">Numéro de Salle</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="s03" name="newPostNSalle" size="15">
    </div>

    <input type="submit" name="buttonCreeNewPost">
</form>



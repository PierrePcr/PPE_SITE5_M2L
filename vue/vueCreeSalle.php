<div class="text-center">
    <h1 id="titreColor">Créer un poste</h1>
</div>

<!-- // FORMULAIRE AJOUT POSTE \\-->

<form action="./?action=creeSalle" method="POST">

    <!-- // NUM NEW POSTE \\-->
    <div class="form-group" >
        <label for="exampleFormControlInput1">Num Poste</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="p13" name="nPoste" size="15">
    </div>

    <!-- // NOM NEW POSTE \\-->
    <div class="form-group" >
        <label for="exampleFormControlInput1">Nom Poste</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="poste 13" name="nomPoste" size="15">
    </div>
  
    <!-- // INDIP NEW POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect1">indIP</label>
        <select class="form-control" id="exampleFormControlSelect1" name="indIP">
            <option>130.120.80</option>
            <option>130.120.81</option>
            <option>130.120.82</option>
        </select>
    </div>

    <!-- // AD NEW POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlInput1">AD</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="8" name="ad" size="15">
    </div>

    <!-- // TYPEPOSTE NEW POSTE \\-->
    <div class="form-group">
        <label for="exampleFormControlSelect2">Type de Poste</label>
        <select multiple class="form-control" id="exampleFormControlSelect2" name="typePoste">
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
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="s03" name="nSalle" size="15">
    </div>

    <input type="submit" name="buttonCreeNewPost" class="btn btn-success" >
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
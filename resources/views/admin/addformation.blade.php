
<form action="/formation" method="POST" class="row g-3">
    @csrf

    <div class="col-md-6">
        <label for="diplome" class="form-label">Diplôme :</label>
        <input type="text" class="form-control" id="diplome" name="diplome">
    </div>

    <div class="col-md-6">
        <label for="etablissement" class="form-label">Établissement :</label>
        <input type="text" class="form-control" id="etablissement" name="etablissement">
    </div>

    <div class="col-md-6">
        <label for="lieu" class="form-label">Lieu :</label>
        <input type="text" class="form-control" id="lieu" name="lieu">
    </div>

    <div class="col-md-6">
        <label for="annee_obtention" class="form-label">Année d'obtention :</label>
        <input type="number" class="form-control" id="annee_obtention" name="annee_obtention">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Ajouter Formation</button>
    </div>
</form>

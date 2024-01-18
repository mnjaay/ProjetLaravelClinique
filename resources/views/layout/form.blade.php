<div class="form-group">
    <label class="col-md-12">Nom Complet</label>
    <div class="col-md-12">
        <input type="text"
        value="@isset($Client->nom)
        {{$Client->nom}}
        @endisset" placeholder="" name="nom" class="form-control form-control-line">
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Adresse</label>
    <div class="col-md-12">
        <input type="text"
        @isset($Client ->adresse)
        value="
        {{$Client->adresse}}
       "  @endisset placeholder="" name="adresse" class="form-control form-control-line">
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Age</label>
    <div class="col-md-12">
        <input type="number"
        @isset($Client->age)
        value=
        "{{$Client->age}}"
         @endisset name="age" class="form-control form-control-line">
    </div>
</div>

<div class="form-group">
    <label class="col-md-12">Genre</label>
    <div class="col-md-12">
        <select name="genre"
      class="form-control form-control-line">
             <option>@isset($Client->genre)
                {{$Client->genre}}
                @endisset</option>
                
            <option>Masculin</option>
            <option>Feminin</option>

        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Soins</label>
    <div class="col-md-12">
        <select name="soin"
        value="@isset($Client->soin)
        {{$Client->soin}}
        @endisset" class="form-control form-control-line">
            <option>Consultation</option>
            <option>Blanchissement Dent</option>
            <option>Usa</option>
            <option>Canada</option>
            <option>Thailand</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Numero Telephone</label>
    <div class="col-md-12">
        <input type="text"
        value="@isset($Client->numero)
        {{$Client->numero}}
        @endisset" placeholder="123 456 7890" name="numero" class="form-control form-control-line">
    </div>
</div>

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
        <select name="soin_id" id="" class="form-control form-control-line">

            @if (isset($Client->soin_id))
            <option value="{{ $Client->soin_id}}" >
                {{ $Client->soin->nom }}
            </option>
            @endif
            @foreach ( $Soins as $Soin )
            @if (isset($Client->soin_id))
                @if ($Client->soin_id != $Soin->id)
                <option value="{{ $Soin->id }}">
                    {{ $Soin->nom }}
                </option>
                @endif
                @else
                <option value="{{ $Soin->id }}">
                    {{ $Soin->nom }}
                </option>
            @endif
            @endforeach

        </select>

    </div>
</div>
<div class="form-group">
    <label class="col-md-12">Numero Telephone</label>
    <div class="col-md-12">
        <input type="text"
        value="@isset($Client->numero)
        {{$Client->numero}}
        @endisset" placeholder="77 000 00 00" name="numero" class="form-control form-control-line">
    </div>
</div>

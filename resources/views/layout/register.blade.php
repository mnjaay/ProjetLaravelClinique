@extends('master')
@section('content')
<div class="col-lg-8 col-xlg-9  col-md-7 ">
    <div class="card">
        <div class="card-body">
            <form class="form-horizontal form-material" action={{route('register.store')}} method="post">
                    @csrf
                <div class="form-group">
                    <label class="col-md-12">Nom Complet</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" name="nom" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Adresse</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" name="adresse" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Age</label>
                    <div class="col-md-12">
                        <input type="number" name="age" class="form-control form-control-line">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Genre</label>
                    <div class="col-md-12">
                        <select name="genre" class="form-control form-control-line">
                            <option>Masculin</option>
                            <option>Feminin</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Soins</label>
                    <div class="col-md-12">
                        <select name="soin" class="form-control form-control-line">
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
                        <input type="text" placeholder="123 456 7890" name="numero" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Enregistrer Patient</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

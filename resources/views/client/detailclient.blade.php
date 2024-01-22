@extends('master')
@section('content')


<div class="container">
    <h1 class="text-center">Dossier Medicale</h1><br><br>
    <table class="table">

        <tr>
            <th>Nom</th>
            <td>{{$Client->nom}}</td>
        </tr>
        <tr>
            <th>adresse</th>
            <td>{{$Client->adresse}}</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>{{$Client->age}}</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>{{$Client->genre}}</td>
        </tr>
        <tr>
            <th>Soins</th>
            <td>{{$Client->soin->nom}}</td>
        </tr>
        <tr>
            <th>Téléphone</th>
            <td>{{$Client->numero}}</td>
        </tr>
        <tr>
            <th>Traitement</th>
            <td class="form-floating">
                <textarea class="form-control" placeholder="description" id="floatingTextarea"></textarea>
            </td>
        </tr>
        <tr class="items-center">
            <th></th>
            <td>
                <button type="button" class="btn btn-success w-50 p-2">Success</button>
            </td>
            </tr>
    </table>
</div>


@endsection

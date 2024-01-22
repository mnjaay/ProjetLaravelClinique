@extends('master')
@section('content')


<div class="container">
    <h1 class="text-center">Dossier Medicale</h1><br><br>
    <table class="table">
        <tr>
            <th>Nom</th>
            <td>kebe</td>
        </tr>
        <tr>
            <th>adresse</th>
            <td>dakar</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>222ans</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>masculin</td>
        </tr>
        <tr>
            <th>Soins</th>
            <td>Traitement des caries</td>
        </tr>
        <tr>
            <th>Téléphone</th>
            <td>889</td>
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

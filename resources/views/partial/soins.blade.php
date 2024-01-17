@extends('master')
@section('content')
<div class="container-fluid">

    <div class="col-lg-8 col-xlg-9  col-md-7 ">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" action={{route('soin.store')}} method="post">
                        @csrf
                    <div class="form-group">
                        <label class="col-md-12">Nom de la Soin</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="" name="nom" class="form-control form-control-line">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Prix</label>
                        <div class="col-md-12">
                            <input type="Number" placeholder="" name="price" class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Enregistrer Soins</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

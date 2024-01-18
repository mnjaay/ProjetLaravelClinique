@extends('master')
@section('content')
<div class="col-lg-8 col-xlg-9  col-md-7 ">
    <div class="card">
        <div class="card-body">
            <form class="form-horizontal form-material" action={{route('register.store')}} method="post">
                    @csrf
                    @include('layout.form')

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

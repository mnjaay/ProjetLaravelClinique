@extends('master')
@section('content')

    <h3 class="d-flex"> Modification Client</h3>
    <div class="col-lg-8 col-xlg-9  col-md-7 ">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('client.update',$Client->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    @include('layout.form')

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            Modifier le client
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

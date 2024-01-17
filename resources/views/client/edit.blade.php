@extends('master')
@section('content')

    <h3>Modification Client</h3>
    <form action="{{ route('products.update',$product->id) }}" method="post">
        @csrf
        @method('PUT');
        @include('partial.table')

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">
                Modifier le client
            </button>
        </div>
    </form>
@endsection

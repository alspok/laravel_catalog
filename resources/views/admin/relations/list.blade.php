@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                @foreach($relations as $relation)
                    {{$relation->id, $relation->product_id, $relation->category_id}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
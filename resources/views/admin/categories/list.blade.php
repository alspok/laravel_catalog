@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                @foreach($categories as $category)
                    {{$category->name}, {$category->description}}<br>
                @endforeach
            </div>
        </div>
    </div>
@endsection

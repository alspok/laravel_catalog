@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                @foreach($reviews as $review)
                    {{$review->comment}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
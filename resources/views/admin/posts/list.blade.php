@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                @foreach($posts as $post)
                    {{$post->name}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
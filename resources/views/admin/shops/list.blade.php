@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                @foreach($shops as $shop)
                    {{$shop->address}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
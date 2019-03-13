@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{$data}}
            <!-- @foreach($data->name as $key => $value)
                {{$key}} = {{$value}}<br>
            @endforeach -->
        </div>
    </div>
</div>
@endsection
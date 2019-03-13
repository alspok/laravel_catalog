@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($data[0] as $item)
           		@if($item['active'] == $act)
            		@foreach($item as $key=>$value)
           				{{$key}} - {{$value}}<br>
           			@endforeach
         		@endif
            	<br>
            @endforeach
        </div><br>
    </div>
</div>
@endsection
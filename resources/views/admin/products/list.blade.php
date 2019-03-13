@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
                @foreach($products as $product)
                	<!-- {{$product}} -->
                	@foreach($product as $key=>$value)
                		{{$key}} {{$value}}
                    <!-- {{$product->name}}
                    {{$product->slug}}
                    {{$product->price}}
                    {{$product->special_price}}
                    {{$product->active}}
                    {{$product->unit}}
                    {{$product->description}}
                    {{$product->shop_id}}
                    {{$product->weight}}
                    {{$product->img}} -->
                    <br>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
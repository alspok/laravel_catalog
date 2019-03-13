@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class='' action="{{route('products.update', $id)  method='post'>
            	@method('POST')
            	@csrf
            	<div class="col-md-6">
            		<label class='col-form-label' for='name'>Name (str):</label>
            		<input type='text' name='name' class='form-control' value='{{$product->name}}'>
            		<br>
            		<button class='btn btn-dark'>Update</button>
            	</div>
            </form>
        </div>
    </div>
</div>
@endsection

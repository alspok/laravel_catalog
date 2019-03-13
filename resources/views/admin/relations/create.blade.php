@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class='' action="{{route('relations.store')}}" method='post'>
            	@method('POST')
            	@csrf
            	<div class="col-md-6">
            		<label class='col-form-label' for='product_id'>Product id (int):</label>
            		<input type='text' name='product_id' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='category_id'>Category id (str):</label>
            		<input type='text' name='category_id' class='form-control'>
            	</div>
            	<br>
            	<button class='btn btn-dark'>Create</button>
            </form>
        </div>
    </div>
</div>
@endsection

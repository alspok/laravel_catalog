@extends('layouts.app')

@section('content')
<link rel='stylesheet' type='text/css' href="{{asset('css/products.css')}}">
<form class='container' action="{{route('products.store')}}" method='post'>
	@method('POST')
	@csrf
      <div class="row justify-content-center">
      	<div class="col-md-6">
      		<label class='col-form-label' for='name'>Name (str):</label>
      		<input type='text' name='name' class='form-control'>
      		<label class='col-form-label' for='slug'>Slug (str):</label>
      		<input type='text' name='slug' class='form-control'>
                  <label class='col-form-label' for='weight'>Weight (float):</label>
                  <input type='text' name='weight' class='form-control'>
      		<label class='col-form-label' for='price'>Price (float):</label>
      		<input type='text' name='price' class='form-control'>
      		<label class='col-form-label' for='special_price'>Spec rice (float):</label>
      		<input type='text' name='special_price' class='form-control'>
      		<label class='col-form-label' for='active'>Active (tinyInt):</label>
      		<input type='text' name='active' class='form-control'>
      	</div>
          	<div class="col-md-6">
                  <label class='col-form-label' for='unit'>Unit (str):</label>
                  <input type='text' name='unit' class='form-control'>
      		<label class='col-form-label'>Description (str):</label>
                  <br>
      		<textarea name='description'></textarea>
                  <br>
                  <label class='col-form-label' for='product_id'>Category (int):</label>
                  <input type='text' name='category' class='form-control'>
      		<label class='col-form-label' for='shop_id'>Shop id (int):</label>
      		<input type='text' name='shop_id' class='form-control'>
      		<label class='col-form-label' for='image'>Image (str):</label>
      		<input type='text' name='img' class='form-control'>
            	<br>
            	<button class='btn btn-dark'>Create</button>
            </div>
      </div>
</form>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class='' action="{{route('reviews.store')}}" method='post'>
            	@method('POST')
            	@csrf
            	<div class="col-md-6">
            		<label class='col-form-label' for='rate'>Rate (float):</label>
            		<input type='text' name='rate' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='comment'>Comment (str):</label>
            		<input type='text' name='comment' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='shop_id'>Shop id (int)::</label>
            		<input type='text' name='shop_id' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='user_id'>User id (int):</label>
            		<input type='text' name='user_id' class='form-control'>
            	</div>
            	<br>
            	<button class='btn btn-dark'>Create</button>
            </form>
        </div>
    </div>
</div>
@endsection


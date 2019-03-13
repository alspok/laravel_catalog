@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class='' action="{{route('posts.store')}}" method='post'>
            	@method('POST')
            	@csrf
            	<div class="col-md-6">
            		<label class='col-form-label' for='name'>Name (str):</label>
            		<input type='text' name='name' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='slug'>Title (str):</label>
            		<input type='text' name='title' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label'>Content (str):</label>
            		<br>
                        <textarea name='content' rows="6" cols="60"></textarea>
            	</div>
                  <div class="col-md-6">
                        <br>
                        <label class='col-form-label' for='content'>User id (int):</label>
                        <input type='text' name='user_id' class='form-control'>
                  </div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='active'>Active (tinyInt):</label>
            		<input type='text' name='active' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='image'>Image (str):</label>
            		<input type='text' name='img' class='form-control'>
            	</div>
            	<br>
            	<button class='btn btn-dark'>Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class='' action="{{route('categories.store')}}" method='post'>
            	@method('POST')
            	@csrf
            	<div class="col-md-6">
            		<label class='col-form-label' for='name'>Name:</label>
            		<input type='text' name='name' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='slug'>Slug:</label>
            		<input type='text' name='slug' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='parent_id'>Parent id::</label>
            		<input type='text' name='parent_id' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='active'>Active:</label>
            		<input type='text' name='active' class='form-control'>
            	</div>
                  <div class="col-md-6">
                        <br>
                        <label class='col-form-label'>Description:</label>
                        <br>
                        <textarea name='description' rows="6" cols="60"></textarea>
                  </div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='type_id'>Type_id:</label>
            		<input type='text' name='type_id' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='image'>Image:</label>
            		<input type='text' name='img' class='form-control'>
            	</div>
            	<br>
            	<button class='btn btn-dark'>Create</button>
            </form>
        </div>
    </div>
</div>
@endsection

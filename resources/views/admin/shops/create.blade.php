@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class='' action="{{route('shops.store')}}" method='post'>
            	@method('POST')
            	@csrf
            	<div class="col-md-6">
            		<label class='col-form-label' for='user_id'>User id (int):</label>
            		<input type='text' name='user_id' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='address'>Address (str):</label>
            		<input type='text' name='address' class='form-control'>
            	</div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='company_code'>Company code (int):</label>
            		<input type='text' name='company_code' class='form-control'>
            	</div>
                <div class="col-md-6">
                    <label class='col-form-label' for='vap_code'>Vap code (int):</label>
                    <input type='text' name='vap_code' class='form-control'>
                </div>
            	<div class="col-md-6">
            		<label class='col-form-label' for='phone_number'>Phone number (int):</label>
            		<input type='text' name='phone_number' class='form-control'>
            	</div>
            	<br>
            	<button class='btn btn-dark'>Create</button>
            </form>
        </div>
    </div>
</div>
@endsection


@include('layouts.app')

<link rel='stylesheet' type='text/css' href="{{asset('css/products.css')}}">
<form class='container' action="{{route('products.store')}}" method='post'>
	@csrf
      <div class="row justify-content-center">
      	<div class="col-md-6">
      		<label class='col-form-label' for='name'>Name (str):</label>
      		<input type='text' name='name' class='form-control' value='some'/>
      		<label class='col-form-label' for='slug'>Slug (str, null) :</label>
      		<input type='text' name='slug' class='form-control' value='some'/>
                  <label class='col-form-label' for='weight'>Weight (float):</label>
                  <input type='text' name='weight' class='form-control' value='1'/>
      		<label class='col-form-label' for='price'>Price (float):</label>
      		<input type='text' name='price' class='form-control' value='1.2'/>
      		<label class='col-form-label' for='special_price'>Spec rice (float, null):</label>
      		<input type='text' name='special_price' class='form-control' value='1.0'/>
      		<label class='col-form-label' for='active'>Active (tinyInt):</label>
      		<input type='text' name='active' class='form-control' value='1'/>
      	</div>
          	<div class="col-md-6">
                  <label class='col-form-label' for='unit'>Unit (str):</label>
                  <input type='text' name='unit' class='form-control' value='vnt'/>
      		<label class='col-form-label'>Description (str, null):</label>
                  <br>
      		<textarea name='description'>somthing something</textarea>
                  <br>
                  <label class='col-form-label' for='product_id'>Category (int):</label>
                  <input type='text' name='category' class='form-control' value='2'/>
      		<label class='col-form-label' for='shop_id'>Shop id (int, null):</label>
      		<input type='text' name='shop_id' class='form-control' value='1'/>
      		<label class='col-form-label' for='image'>Image (str, null):</label>
      		<input type='text' name='img' class='form-control' value='img'/>
            	<br>
            	<button class='btn btn-dark'>Create</button>
            </div>
      </div>
</form>

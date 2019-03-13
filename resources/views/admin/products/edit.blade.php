@extends('layouts.app')

@section('content')
<form class='container' action="{{ route('products.update', $data->id) }}" method='post'>
	@method('POST')
	@csrf
    <div class="row justify-content-center">
		<div class="col-md-4">
			<label class='col-form-label'>ID:</label>
      		<input type='text' name='id' class='form-control' value = '{{$data->id}}' />
      		<label class='col-form-label'>Name (str):</label>
      		<input type='text' name='name' class='form-control' value = '{{$data->name}}' />
      		<label class='col-form-label'>Slug (str):</label>
      		<input type='text' name='slug' class='form-control' value = '{{$data->slug}}' />
      		<label class='col-form-label'>Weight (float):</label>
      		<input type='text' name='weight' class='form-control' value = '{{$data->weight}}' />
      		<label class='col-form-label'>Price (float):</label>
      		<input type='text' name='price' class='form-control' value = '{{$data->price}}' />
      		<label class='col-form-label'>Special price (float):</label>
      		<input type='text' name='special_price' class='form-control' value = '{{$data->special_price}}' />
      	</div>
      	<div class="col-md-4">
      		<label class='col-form-label'>Unit (str)</label>
      		<input type='text' name='unit' class='form-control' value = '{{$data->unit}}' />
      		<label class='col-form-label'>Description (text): (str)</label>
      		<input type='text' name='description' class='form-control' value = '{{$data->description}}' />
      		<label class='col-form-label'>Activity (boolean):</label>
      		<input type='text' name='active' class='form-control' value = '{{$data->active}}' />
      		<label class='col-form-label'>Category (int):</label>
      		<input type='text' name='category' class='form-control' value = '{{$data->category}}' />
      		<label class='col-form-label'>Shop id (int):</label>
      		<input type='text' name='shop_id' class='form-control' value = '{{$data->shop_id}}' />
      		<label class='col-form-label'>Image (string):</label>
      		<input type='text' name='img' class='form-control' value = '{{$data->img}}' />
      		<br><br>
      		<button type='submit' class='btn btn-dark' width='20' height='10'>Save</button>
      	</div>
	</div>
</form>
@endsection

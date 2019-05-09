@include('layouts.app')

<!doctype html>
<html>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

	<div class="container">
	<h3>Keisti</h3>
		<div row>
			<form class=''action="{{ route('products.update', $product->id)}}" method='post'>
				<div class='col-mg-6 form-group'>
					<h4>Produktas</h4>
					<input type='text' name='name' width='100px' value='{{$product->name}}'/><br><br>
					<h4>Svoris</h4>
					<input type='text' name='weight' value='{{$product->weight}}'/><br><br>
					<h4>Vnt</h4>
					<input type='text' name='unit' value='{{$product->unit}}'/><br><br>
					<h4>Kaina</h4>
					<input type='text' name='price' value='{{$product->price}}'/><br><br>
					<h4>Spec. kaina</h4>
					<input type='text' name='special_price' value='{{$product->special_price}}'/><br><br>
					<h4>Act</h4>
					<input type='text' name='active' value='{{$product->active}}'/><br><br>
				</div>
				<div class='col-mg-6 form-group'>
					<h4>Pastabos</h4>
					<input type='text' name='description' value='{{$product->description}}'/><br><br>
					<h4>Kat</h4>
					<input type='text' name='category' value='{{$product->category}}'/><br><br>
					<h4>Parduotuvė</h4>
					<input type='text' name='shop_id' value='{{$product->shop_id}}'/><br><br>
					<h4>Vaizdas</h4>
					<input type='text' name='img' value='{{$product->img}}'/><br><br>
					<p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
				</div>
			</form>
		</div>
	</div>
</html>
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
		<div class="col-mg-6">
			<h4>Keisti</h4>
				<div class="table-responsive">
					<table id="mytable" class="table table-bordred table-striped">
						<thead>
							<!-- <th><input type="checkbox" id="checkall"/></th> -->
							<th class='col-md-1'>Produktas</th>
							<th class='col-md-1'>Svoris</th>
							<th class='col-md-1'>Vnt</th>
							<th class='col-md-1'>Kaina</th>
							<th class='col-md-1'>Spc kaina</th>
							<th class='col-md-1'>Act</th>
							<th class='col-md-1'>Pastabos</th>
							<th class='col-md-1'>Kat</th>
							<th class='col-md-1'>Pard</th>
							<th class='col-md-1'>Vaizdas</th>
							<th class='col-md-1'>Keisti</th>
						</thead>
						<tbody>
							<form class=''action="{{ route('products.update', $product->id)}}" method='post'>
								@csrf
								<!-- <th><input type="checkbox" id="checkall"/></th> -->
								<td><input type='text' name='name' width='100px' value='{{$product->name}}'/></td>
								<td><input type='text' name='weight' value='{{$product->weight}}'/></td>
								<td><input type='text' name='unit' value='{{$product->unit}}'/></td>
								<td><input type='text' name='price' value='{{$product->price}}'/></td>
								<td><input type='text' name='special_price' value='{{$product->special_price}}'/></td>
								<td><input type='text' name='active' value='{{$product->active}}'/></td>
								<td><input type='text' name='description' value='{{$product->description}}'/></td>
								<td><input type='text' name='category' value='{{$product->category}}'/></td>
								<td><input type='text' name='shop_id' value='{{$product->shop_id}}'/></td>
								<td><input type='text' name='img' value='{{$product->img}}'/></td>
								<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
							</form>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</html>
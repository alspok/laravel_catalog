<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-md-12">
        	<h4>Maistas - Edit</h4>
			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<!-- <th><input type="checkbox" id="checkall"/></th> -->
						<th style='width:200px'>Name</th>
						<th style='width:60px'>Weight</th>
						<th>Unit</th>
						<th style='width:60px'>Price</th>
						<th style='width: 100px'>Spec price</th>
						<th>Act</th>
						<th style='width: 200px'>Description</th>
						<th>Cat</th>
						<th style='width: 100px'>Shop</th>
						<th style='width: 200px'>Img</th>
						<th>Keisti</th>
					</thead>
					<tbody>
					<tr>
						<form class=''action="{{ route('products.edit', $product->id)}}" method='post'>
							@csrf
							<!-- <th><input type="checkbox" id="checkall"/></th> -->
							<td><input type='text' name='name' value='{{$product->name}}'/></td>
							<td><input type='text' name='weight' value='{{$product->weight}}'/></td>
							<td><input type='text' name='unit' value='{{$product->unit}}'/></td>
							<td><input type='text' name='price' value='{{$product->price}}'/></td>
							<td><input type='text' name='specprice' value='{{$product->special_price}}'/></td>
							<td><input type='text' name='active' value='{{$product->active}}'/></td>
							<td><input type='text' name='description' value='{{$product->description}}'/></td>
							<td><input type='text' name='category' value='{{$product->category}}'/></td>
							<td><input type='text' name='shop_id' value='{{$product->shop_id}}'/></td>
							<td><input type='text' name='img' value='{{$product->img}}'/></td>
						</form>
						<form class='' action="{{ route('products.update', $product->id)}}" method='post'>
							@csrf
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
						</form>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
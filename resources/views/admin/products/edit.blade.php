<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-md-6">
        	<h4>Maistas - Edit</h4>
			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<!-- <thead>
						<th><input type="checkbox" id="checkall" /></th><th>Name</th><br>
						<th><input type="checkbox" id="checkall" /></th><th>Weight</th><br>
						<th><input type="checkbox" id="checkall" /></th><th>Unit</th><br>
						<th><input type="checkbox" id="checkall" /></th><th>Price</th><br>
						<th><input type="checkbox" id="checkall" /></th><th style='width: 100px'>Spec price</th><br>
						<th><input type="checkbox" id="checkall" /></th><th>Active</th><br>
						<th><input type="checkbox" id="checkall" /></th><th style='width: 200px'>Description</th><br>
						<th><input type="checkbox" id="checkall" /></th><th>Cat</th><br>
						<th><input type="checkbox" id="checkall" /></th><th>Shop</th><br>
						<th><input type="checkbox" id="checkall" /></th><th style='width: 200px'>Img</th><br>
						<th><input type="checkbox" id="checkall" /></th><th>Edit</th><br>
					</thead> -->
					<tbody>
					<tr><th>Name</th><th><input type='text' name='name' value='{{$product->name}}'/></th></tr>
					<tr><th>Weight</th><th><input type='text' name='weight' value='{{$product->weight}}'/></th><tr>
					<tr><th>Unit</th><th><input type='text' name='unit' value='{{$product->unit}}'/></th></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
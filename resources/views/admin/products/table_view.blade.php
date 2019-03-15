	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-md-12">
        	<h3>Maistas - Index</h3>
			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<th><input type="checkbox" id="checkall" /></th>
						<th style='width: 220px'>Name</th>
						<th>Weight</th>
						<th>Unit</th>
						<th>Price</th>
						<th>Spec price</th>
						<th>Active</th>
						<th style='width: 180px'>Description</th>
						<th>Cat</th>
						<th>Shop</th>
						<th style='width: 180px'>Img</th>
						<th>Edit</th>
						<th>Delete</th>
					</thead>
					<tbody>
							@foreach($data as $item)
								@if($item['active'] == 1) <tr class='d-flex'>
								@else <tr class='d-flex strike'>
								@endif
								<td><input type="checkbox" class="checkthis" /></td>
								@foreach($item as $key => $value)
									@if($key == 'id' || $key == 'slug' || $key == 'created_at' || $key == 'updated_at') @continue
										@else  <td>{{$value}}</td>
									@endif
								@endforeach
								<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
								<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-md-12">
        	<h3>Maistas</h3>
			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<th><input type="checkbox" id="checkall" /></th>
						<th>Name</th>
						<th>Weight</th>
						<th>Unit</th>
						<!-- <th>Slug</th> -->
						<th>Price</th>
						<th>Spec. price</th>
						<th>Active</th>
						<th>Description</th>
						<th>Shop</th>
						<th>Img</th>
						<th>Edit</th>
						<th>Delete</th>
					</thead>
					<tbody>
						<tr>
							<td><input type="checkbox" class="checkthis" /></td>
							<td>{{$data['name']}}</td>
							<td>{{$data['weight']}}</td>
							<td>{{$data['unit']}}</td>
							<!-- <td>{{$data['slug']}}</td> -->
							<td>{{$data['price']}}</td>
							<td>{{$data['special_price']}}</td>
							<td>{{$data['active']}}</td>
							<td>{{$data['description']}}</td>
							<td>{{$data['shop_id']}}</td>
							<td>{{$data['img']}}</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<!-- <tr>
							<td><input type="checkbox" class="checkthis" /></td>
							<td>Mohsin</td>
							<td>Irshad</td>
							<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
							<td>isometric.mohsin@gmail.com</td>
							<td>+923335586757</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



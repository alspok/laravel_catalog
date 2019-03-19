	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
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
						<th style='width: 200px'>Produktas</th>
						<th>Svoris</th>
						<th>Vnt</th>
						<th>Kaina</th>
						<th>Spc kaina</th>
						<th>Active</th>
						<th style='width: 220px'>Pastabos</th>
						<th>Kat</th>
						<th>Pard</th>
						<th >Vaizdas</th>
						<th>Keisti</th>
						<th>Trinti</th>
					</thead>
					<tbody>
						@foreach($products as $item)
							@if($item->category == 1)
								<form class='' action="{{ route('products.update', $item->id) }}" method='post'>
								@csrf
									@if($item->active == 1) <tr class='d-flex'>
									@else <tr class='d-flex strike'>
									@endif
										<td><input type="checkbox" class="checkthis" /></td>
										<td>{{$item->name}}</td>
										<td>{{$item->weight}}</td>
										<td>{{$item->unit}}</td>
										<td>{{$item->price}}</td>
										<td>{{$item->special_price}}</td>
										<td>{{$item->active}}</td>
										<td>{{$item->description}}</td>
										<td>{{$item->category}}</td>
										<td>{{$item->shop_id}}</td>
										<td><a href='{{$item->img}}'>Img</a></td>
								</form>
								<form class='' action="{{ route('products.edit', $item->id)}}" method='post'>
									@csrf
									<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
								</form>
								<form class='' action="{{ route('products.softdelete', $item->id)}}" method='post'>
									@csrf
									<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button type='submit' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
								</form>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
        <div class="col-md-12">
        	<h3>Kita</h3>
			<div class="table-responsive">
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<th><input type="checkbox" id="checkall" /></th>
						<th style='width: 200px'>Produktas</th>
						<th>Svoris</th>
						<th>Vnt</th>
						<th>Kaina</th>
						<th>Spc kaina</th>
						<th>Active</th>
						<th style='width: 220px'>Pastabos</th>
						<th>Kat</th>
						<th>Pard</th>
						<th >Vaizdas</th>
						<th>Keisti</th>
						<th>Trinti</th>
					</thead>
					<tbody>
						@foreach($products as $item)
							@if($item->category == 2)
								<form class='' action="{{ route('products.update', $item->id) }}" method='post'>
								@csrf
									@if($item->active == 1) <tr class='d-flex'>
									@else <tr class='d-flex strike'>
									@endif
										<td><input type="checkbox" class="checkthis" /></td>
										<td>{{$item->name}}</td>
										<td>{{$item->weight}}</td>
										<td>{{$item->unit}}</td>
										<td>{{$item->price}}</td>
										<td>{{$item->special_price}}</td>
										<td>{{$item->active}}</td>
										<td>{{$item->description}}</td>
										<td>{{$item->category}}</td>
										<td>{{$item->shop_id}}</td>
										<td><a href='{{$item->img}}'>Img</a></td>
								</form>
								<form class='' action="{{ route('products.edit', $item->id)}}" method='post'>
									@csrf
									<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
								</form>
								<form class='' action="{{ route('products.softdelete', $item->id)}}" method='post'>
									@csrf
									<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button type='submit' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
								</form>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
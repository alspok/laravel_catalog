@include('layouts.app')
@include('layouts.time')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container" style='border: solid black 0.5px'>
<!-- <div class="container-fluid" style='border: solid black 0.5px max-width:1170px'> -->
	<div class="row">
        <div class="col-md-12">
        	<h4>Maistas</h4>
				<div class="table-responsive">
					<table id="mytable" class="table main table-bordred table-striped">
						<thead>
							<tr class='row'>
								<th class='col-md-1'><input type="checkbox" id="checkall"></th>
								<th class='col-md-2'>Produktas</th>
								<th class='col-md-1'>Svoris</th>
								<th class='col-md-1'>Vnt</th>
								<th class='col-md-1'>Kaina</th>
								<!-- <th class='col-md-1'>Spc kaina</th> -->
								<!-- <th>Active</th> -->
								<th class="col-md-2">Pastabos</th>
								<!-- <th class='col-md-1'>Kat</th> -->
								<!-- <th class='col-md-1'>Pard</th> -->
								<th class='col-md-1'>Vaizdas</th>
								<th class='col-md-1'>Keisti</th>
								<th class='col-md-1'>Trinti</th>
							</tr>
						</thead>
						<tbody>
							<tr class='row'>
								@foreach($products as $item)
									@if($item->category == 1)
										<form class='' action="{{ route('products.update', $item->id) }}" method='post'>
										@csrf
											@if($item->active == 1) <tr class='d-flex rowfont'>
												@else <tr class='d-flex strike'>
											@endif
												<td class='col-md-1'><input type="checkbox" class="checkthis"></td>
												<td class='col-md-2'>{{ $item->name }}</td>
												<td class='col-md-1'>{{ $item->weight }}</td>
												<td class='col-md-1'>{{ $item->unit }}</td>
												<td class='col-md-1'>{{ $item->price }}</td>
												<!-- <td class='col-md-1'>{{$item->special_price}}</td> -->
												<!-- <td>{{$item->active}}</td> -->
												<td class='col-md-2'>{{ $item->description }}</td>
												<!-- <td class='col-md-1'>{{$item->category}}</td> -->
												<!-- <td class='col-md-1'>{{$item->shop_id}}</td> -->
												<td class='col-md-1'><a href='{{$item->img}}'>Img</a></td>
										</form>
										<form class='' action="{{ route('products.edit', $item->id)}}" method='post'>
											@csrf
											<td class='col-md-1'><p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
										</form>
										<form class='' action="{{ route('products.softdelete', $item->id)}}" method='post'>
											@csrf
											<td class='col-md-1'><p data-placement="top" data-toggle="tooltip" title="Delete"><button type='submit' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
										</form>
									@endif
								@endforeach
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" style='border: solid black 0.5px'>
	<div class="row">
        <div class="col-md-12">
        	<h4>Kita</h4>
			<div class="table-responsive">
				<table id="mytable" class="table main table-bordred table-striped">
					<thead>
						<tr class='row'>
							<th class='col-md-1'><input type="checkbox" id="checkall"></th>
							<th class='col-md-2'>Produktas</th>
							<th class='col-md-1'>Svoris</th>
							<th class='col-md-1'>Vnt</th>
							<th class='col-md-1'>Kaina</th>
							<!-- <th class='col-md-1'>Spc kaina</th> -->
							<!-- <th>Active</th> -->
							<th class='col-md-2'>Pastabos</th>
							<!-- <th class='col-md-1'>Kat</th> -->
							<!-- <th class='col-md-1'>Pard</th> -->
							<th class='col-md-1'>Vaizdas</th>
							<th class='col-md-1'>Keisti</th>
							<th class='col-md-1'>Trinti</th>
						</tr>
					</thead>
					<tbody>
						<tr class='row'>
							@foreach($products as $item)
								@if($item->category == 2)
									<form class='' action="{{ route('products.update', $item->id) }}" method='post'>
									@csrf
										@if($item->active == 1) <tr class='d-flex rowfont'>
											@else <tr class='d-flex strike'>
										@endif
											<td class='col-md-1'><input type="checkbox" class="checkthis"></td>
											<td class='col-md-2'>{{ $item->name }}</td>
											<td class='col-md-1'>{{ $item->weight }}</td>
											<td class='col-md-1'>{{ $item->unit }}</td>
											<td class='col-md-1'>{{ $item->price }}</td>
											<!-- <td class='col-md-1'>{{$item->special_price}}</td> -->
											<!-- <td>{{$item->active}}</td> -->
											<td class='col-md-2'>{{ $item->description }}</td>
											<!-- <td class='col-md-1'>{{$item->category}}</td> -->
											<!-- <td class='col-md-1'>{{$item->shop_id}}</td> -->
											<td class='col-md-1'><a href='{{$item->img}}'>Img</a></td>
									</form>
									<form class='' action="{{ route('products.edit', $item->id)}}" method='post'>
										@csrf
										<td class='col-md-1'><p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
									</form>
									<form class='' action="{{ route('products.softdelete', $item->id)}}" method='post'>
										@csrf
										<td class='col-md-1'><p data-placement="top" data-toggle="tooltip" title="Delete"><button type='submit' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
									</form>
								@endif
							@endforeach
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="container" style='border: solid black 0.5px'>
	<div class="row">
        <div class="col-md-6" style='border: solid black 0.5px'>
			<div>
				Pastabos/Komentarai</h4>
				<button type='submit'>Submit</button>
			</div>
			<form class='' action='' method='post'>
				<textarea name="comment" form="usrform" cols='60' rows='3'></textarea>
			</form>
		</div>
		<div class="col-md-6">
				<form class='' action='' method='post'>
					<button type='submit'>Send</button>
				</form>
			</div>
		<!-- <div class="col-md-4">
			<form class='' action='' method='post'>
				<textarea name="comment" form="usrform" cols='60' rows='4'></textarea>
			</form>
		</div>
		<div class="col-md-1">
			<input type='submit' name="usrform" />
		</div> -->
		<!-- <div class="col-md-2" >
			<form class='' action='' method='post'>
				<a href="{{ route('products.create') }}"><h4><b>Įvesti produktą</b></h4></a>
			</form>
		</div> -->
	</div>
</div>
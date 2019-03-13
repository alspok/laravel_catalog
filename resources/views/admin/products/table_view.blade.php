@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >

<div class='container'>
	<div class='row justify-content-center'>
		<div class="col-md-12">
			<table>
				<thead>
					<tr class='d-flex'>
						<th class='col-2'>Produktas</th>
						<th class='col-1'>Slug</th>
						<th class='col-1'>Svoris</th>
						<th class='col-1'>Kaina</th>
						<th class='col-2'>Spec. kaina</th>
						<th class='col-1'>Aktyvumas</th>
						<th class='col-1'>Vienetas</th>
						<th class='col-2'>Pastabos</th>
						<th class='col-1'>Kategorija</th>
						<th class='col-2'>Paveikslas</th>
					</tr>
				@foreach($data as $item)
					@if($item['active'] == 1) <tr class='d-flex'>
						@else <tr class='d-flex strike'>
					@endif
					@foreach($item as $key => $value)
						<td>{{$value}}</td>
					@endforeach
				@endforeach
				</tr>
			</table>
		</div></div>

	</div>
@endsection
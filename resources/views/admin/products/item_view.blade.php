@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >

    <div class='container'>
	<div class='row justify-content-center'>
		<table>
			<th>Produktas</th>
			<th>Slug</th>
			<th>Svoris</th>
			<th>Kaina</th>
			<th>Spec. kaina</th>
			<th>Aktyvumas</th>
			<th>Vienetas</th>
			<th>Pastabos</th>
			<th>Kategorija</th>
			<th>Paveikslas</th>
			@foreach($data as $key => $value)
				@if($data['active'] == 1) <tr>
				@else <tr class='strike'>
				@endif
				<td>{{$value}}</td>
			@endforeach
			</tr>
		</table>
	</div>
</div>
@endsection
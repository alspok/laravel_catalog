<!-- <form class='' action="{{route('products.update', $product['id'])}}"  method='post'>
						{{ csrf_field() }}
						{{$product['id']}} - {{$product['name']}}
						@if($product['active'] == 1) <tr class='d-flex'>
							@else <tr class='d-flex strike'>
						@endif
						<td><input type="checkbox" class="checkthis" /></td>
						@foreach($product as $key => $value)
								@if($key == 'id' || $key == 'slug' || $key == 'created_at' || $key == 'updated_at') @continue
									@else  <td><input type='text' name='{{$key}}'style='border-style: hidden' value='{{$value}}' /></td>
								@endif
						@endforeach
						</form>
						<form class='' action="{{route('products.update', $product['id'])}}"  method='post'>
							<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button type='submit' class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
						</form>
						<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button type='submit' class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
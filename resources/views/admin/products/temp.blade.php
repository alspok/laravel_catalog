		@foreach($data as $key=>$value)
    		@$if($i > 0 && $i < 9)
				<div class="col-md-3">
		      		<label class='col-form-label' for='name'>{{$key}}</label>
		      		<input type='text' name='name' class='form-control' value={{$value}}>
		      	</div>
      		@endif
	   	{{$i++}}
    	@endforeach

    	<!-- @if($i > 0 && $i < 9)
    		<div class="col-md-3">
		      		<label class='col-form-label' for='name'>{{$data[$key]}}</label>
		      		<input type='text' name='name' class='form-control' value={{$data[$value]}}>
		      	</div>
		    @endif -->
<!doctype html>
<html>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

	<div class="container">
	<h3>Pakeisti automobilį</h3>
		<div row>
			<form class=''action="{{ route('cars.upstore', $car->id )}}" method='post'>
            @csrf
				<div class='col-mg-6 form-group'>
					<h4>Id</h4>
					<input type='text' name='id' width='100px' value="{{ $car->id }}" /><br><br>
					<h4>Modelis</h4>
					<input type='text' name='model' width='100px' value="{{ $car->model }}" /><br><br>
					<h4>Slug</h4>
					<input type='text' name='slug' value="{{ $car->slug }}" /><br><br>
                    <h4>Metai</h4>
					<input type='text' name='year' value="{{ $car->year }}" /><br><br>
					<h4>Kaina</h4>
					<input type='text' name='price' value="{{ $car->price }}" /><br><br>
					<h4>Spec. kaina</h4>
					<input type='text' name='special_price' value="{{ $car->special_price }}" /><br><br>
					<h4>Vaizdas</h4>
                    <input type='text' name='img' value="{{ $car->imga }}" /><br><br>
                    <input type='submit' />
                </div>
			</form>
		</div>
    </div>
    

    
</html>
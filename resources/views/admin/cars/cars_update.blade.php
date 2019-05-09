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
			<form class=''action="{{ route('cars.store' )}}" method='post'>
            @csrf
				<div class='col-mg-6 form-group'>
					<h4>Modelis</h4>
					<input type='text' name='model' width='100px'  value='VW' /><br><br>
					<h4>Slug</h4>
					<input type='text' name='slug' value='vw' /><br><br>
                    <h4>Metai</h4>
					<input type='text' name='year' value='1998' /><br><br>
					<h4>Kaina</h4>
					<input type='text' name='price' value='1000'/><br><br>
					<h4>Spec. kaina</h4>
					<input type='text' name='special_price' value='800''/><br><br>
					<h4>Vaizdas</h4>
                    <input type='text' name='img' value='img''/><br><br>
                    <input type='submit' />
                </div>
			</form>
		</div>
    </div>
    

    
</html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}" >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class='container'>
    <div class='row'>
        <div class='col-md-6'>
            <li>Dabar: {{ $current }}</li>
        </div>
        <div class='col-md-6'>
            <li>Paskutinį kartą keista: <span class='size-color'>{{ $last->updated_at->format('Y M d, H:i') }}</span></li>
        </div>
    </div>
</div>
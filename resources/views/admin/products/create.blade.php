@include('layouts.app')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
        <form class='' action="{{route('products.store')}}" method='post'>
        @csrf
            <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                <label for="exampleInputEmail1">Produktas</label>
                <input type='text' name='name' width='100px' />
            </div>
            <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                <label for="exampleInputEmail1">Svoris</label>
                <input type='text' name='weight' />
            </div>
            <div class="clearfix"></div>
            
            <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                <label for="exampleInputPassword1">Vienetas</label>
                <input type='text' name='unit' />
            </div>
            <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                <label for="exampleInputPassword1">Kaina</label>
                <input type='text' name='price' />
            </div>
            <div class="clearfix"></div>
            
            <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                <label for="exampleInputFile">Spec. kaina</label>
                <input type='text' name='special_price' />
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                <label for="exampleInputFile">Pastabos</label>
                <input type='text' name='description' />
            </div>
            <div class="clearfix"></div>

            <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                <label for="exampleInputFile">Kat</label>
                <input type='text' name='category' />
            </div>
            <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                <label for="exampleInputFile">Act</label>
                <input type='text' name='active' />
            </div>
            <div class="clearfix"></div>

            <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
                <label for="exampleInputFile">Parduotuvė</label>
                <input type='text' name='shop_id' />
            </div>
            <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
                <label for="exampleInputFile">Vaizdas</label>
                <input type='text' name='img' />
            </div>
            <div class="clearfix"></div>

            <div class="form-group col-xs-10 col-sm-10 col-md-4 col-lg-4">
            <button type="submit" class="btn btn-primary center-block">Suvesti</button>
            </div>
            <div class="clearfix"></div>
        </form>
	</div>
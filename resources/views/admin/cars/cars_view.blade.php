<div class="container">
    <h4>Cars in stock</h4>
    <div class='row'>
		@foreach($cars as $item)
            <form class='' action='' method='get'>
            @csrf
                <td class='col-md-1'>{{$item->id}}</td>
                <td class='col-md-1'>{{$item->model}}</td>
                <td class='col-md-1'>{{$item->slug}}</td>
                <td class='col-md-1'>{{$item->year}}</td>
                <td class='col-md-1'>{{$item->price}}</td>
                <td class='col-md-1'>{{$item->special_price}}</td>
                <td class='col-md-1'>{{$item->img}}</td>
            </form>
        @endforeach
        <div class='row'>
            <form class='' action="{{ route('cars.delete') }}" method='post'>
            @csrf
                <label>Car Id:</label>
                <input type='text' name='id'/>
                <input type='submit' value='Delete' />
            </form>
            <form class='' action="{{ route('cars.update') }}" method='post'>
            @csrf
                <label>Car Id:</label>
                <input type='text' name='car-up-id' />
                <input type='submit' value='Update' />
            </form>
            <form class='' action="{{ route('cars')}}" method='get'>
            @csrf
                <input type='submit' value='Add new' />
            </form>
        </div>
    </div>

</div>

<div class="container">
    <div class='row'>
		@foreach($cars as $item)
            <form class='' action='' method='get'>
            @csrf
                    <td class='col-md-1'>{{$item->model}}</td>
                    <td class='col-md-1'>{{$item->slug}}</td>
                    <td class='col-md-1'>{{$item->year}}</td>
                    <td class='col-md-1'>{{$item->price}}</td>
                    <td class='col-md-1'>{{$item->special_price}}</td>
                    <td class='col-md-1'>{{$item->img}}</td>
            </form>
        @endforeach
    </div>
</div>

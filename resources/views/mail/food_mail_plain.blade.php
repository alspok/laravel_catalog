Labas, {{ $foodMail->receiver }}.

Išsiųsta {{$foodMail->currentTime}}

Maistas

@foreach($foodMail->tableView as $item)
@if($item->shop_id == 1 && $item->active == 1)
{{$item->name}}   {{$item->weight}} {{$item->unit}}    {{$item->price}}
@endif
@endforeach

Kita

@foreach($foodMail->tableView as $item)
@if($item->shop_id == 2 && $item->active == 1)
{{$item->name}}   {{$item->weight}} {{$item->unit}}    {{$item->price}}
@endif
@endforeach

Dėkui
{{ $foodMail->sender }}
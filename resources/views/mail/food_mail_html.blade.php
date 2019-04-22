Labas, <i>{{ $foodMail->receiver }}</i>,
<p>Užsakymas {{$foodMail->currentTime}}</p>
<p>Maistas</p>
    @foreach($foodMail->tableView as $item)
        @if($item->shop_id == 1 && $item->category == 1)
            {{$item->name}}    {{$item->weight}}    {{$item->unit}}<br>
        @endif
    @endforeach
<p>Kita</p>
    @foreach($foodMail->tableView as $item)
        @if($item->shop_id == 2 && $item->category == 2)
        {{$item->name}}    {{$item->weight}}    {{$item->unit}}<br>
        @endif
    @endforeach
<br>
Dėkui.<br>
<i>{{ $foodMail->sender }}</i>
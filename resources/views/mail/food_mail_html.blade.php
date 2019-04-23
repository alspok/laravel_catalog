<html>
Labas, <i><b>{{ $foodMail->receiver }}</b></i>,
<p>Išsiųsta {{$foodMail->currentTime}}</p>
<p><b>Maista</b>s</p>
    @foreach($foodMail->tableView as $item)
        @if($item->shop_id == 1 && $item->active == 1)
            {{$item->name}}    {{$item->weight}}    {{$item->unit}}<br>
        @endif
    @endforeach
<p><b>Kita</b></p>
    @foreach($foodMail->tableView as $item)
        @if($item->shop_id == 2 && $item->active == 1)
        {{$item->name}}    {{$item->weight}}    {{$item->unit}}<br>
        @endif
    @endforeach
<br>
Dėkui.<br>
<i>{{ $foodMail->sender }}</i>
</html>
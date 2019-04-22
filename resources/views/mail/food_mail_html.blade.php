Labas, <i>{{ $foodMail->receiver }}</i>,
<p>Užsakymas</p>
<p>Maistas</p>
    @foreach($foodMail->tableView as $item)
        @if($item->shop_id == 2 && $item->category == 1)
            {{$item->name}}<br>
        @endif
    @endforeach
<p>Kita</p>
    @foreach($foodMail->tableView as $item)
        @if($item->shop_id == 1 && $item->category == 2)
            {{$item->name}}<br>
        @endif
    @endforeach
<br><br>
Dėkui.<br>
<i>{{ $foodMail->sender }}</i>
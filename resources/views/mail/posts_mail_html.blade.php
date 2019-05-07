<html>
To: <i><b>{{ $postsMail->receiver }}</b></i>,
<p>Išsiųsta {{ $postsMail->currentTime }}</p>

<p><b>Pastabos/Komentarai</b>s</p>

{{ $postsMail->tableView }}

<br><br>
Siuntėjas:<br>
<i>{{ $postsMail->sender }}</i>
<i>{{ $postsMail->senderEmail }}</i>
</html>
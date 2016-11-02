<div>Dag Sarah,</div>
<div>Dit waren de winnaars van deze periode:</div>

@foreach($users as $user)
<div>{{ $user->first_name }} {{ $user->last_name }} met een score van {{ $user->quiz_score }}</div>
@endforeach


<div>Maak er nog een fijne dag van!</div>
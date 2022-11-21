@foreach($users as $value)
    @if($loop->first)
        First itteration
    @endif

    @if($loop->last)
       Last itteration
    @endif

    <p>id: {{ $value['id'] . $value['name'] }}</p>
@endforeach
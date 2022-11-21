@foreach($users as $myuser)
    <li>id:{{ $myuser['id']}} ,
        name : {{ $myuser['name']}}
</li>
    @endforeach
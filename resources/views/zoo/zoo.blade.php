
<ul>
    @foreach ($animals as $animal)
        <li>Name: <b>{{ $animal->name}}</b> <br>
            Type:  <b>{{$animal->type}}</b> <br>
            Edit: <a href="{{route('animals.edit', $animal)}}">Edit</a>
        </li>
        @if (!$loop->last)
            <br>
        @endif
    @endforeach
</ul>

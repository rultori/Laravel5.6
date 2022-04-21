    @if($errors->any())
        <ul>
            @foreach (@$errors->all() as $error)
            <li><i>{{ $error}}</i></li>
            @endforeach
        </ul>

    @endif

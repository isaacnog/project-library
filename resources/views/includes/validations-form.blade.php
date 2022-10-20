@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@extends('layouts.app')

@section('title', 'Informações do usuário')

@section('content')
    
    <h1>Listagem do usuário {{ $user->name }}</h1><a href="{{ route('users.index') }}">Retornar</a>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>
@endsection
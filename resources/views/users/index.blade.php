@extends('layouts.app')

@section('title', 'Lista de usuários')

@section('content')

    <h1>
        Lista de usuários
        <a href="{{ route('users.create') }}">+</a>
    </h1>

    @foreach ($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </li>
    @endforeach

@endsection

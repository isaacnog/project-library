@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
    
    <h1>Editar Usuário {{ $user->name }}</h1><a href="{{ route('users.index') }}">Retornar</a>

    @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection
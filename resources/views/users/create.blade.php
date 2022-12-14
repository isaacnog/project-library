@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
    
    <h1>Novo Usuário</h1>
    <a href="{{ route('users.index') }}">Retornar</a>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @include('users._partials.form')
    </form>
@endsection
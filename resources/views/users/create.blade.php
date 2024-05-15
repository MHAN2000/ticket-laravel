@extends('base')
@section('title', 'Usuario Crear')
@section('body')
<form id="usersForm" onsubmit="createUser()">
    @include('users.partials.form')
    <button class="btn btn-primary" type="submit">Registrar</button>
</form>
@endsection
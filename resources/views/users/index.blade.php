@extends('base')
@section('title', 'Usuarios')
@section('body')
<div class="grid">
    <div class="col-12">
        <h5>Usuarios</h5>
        <button class="btn btn-primary" onclick="createUserModal()">Agregar</button>
    </div>
</div>
<table id="usersTable">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha de registro</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
@endsection
@push('scripts')
<script src="{{ asset('js/usersIndex.js') }}" defer></script>
<script src="{{ asset('js/usersCreateUpdate.js') }}" defer></script>
@endpush
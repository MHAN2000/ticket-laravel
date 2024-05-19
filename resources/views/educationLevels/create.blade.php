@extends('base')
@section('title', 'Nivel educativo Crear')
@section('body')
<form id="educationLevelForm" onsubmit="createEducationLevel()">
    @include('educationLevels.partials.form')
    <button class="btn btn-primary" type="submit">Registrar</button>
</form>
@endsection
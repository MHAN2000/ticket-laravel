@extends('base')
@section('title', 'Niveles educativos')
@section('body')
<div class="grid">
    <div class="col-12">
        <h5>Niveles educativos</h5>
        <button class="btn btn-primary" onclick="createEducationLevelModal()">Agregar</button>
    </div>
    <div class="col-12">
        <table id="educationLevelsTable">
            <thead>
                <th>Nivel</th>
                <th></th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/educationLevelsIndex.js') }}" defer></script>
<script src="{{ asset('js/educationLevelsCreateUpdate.js') }}" defer></script>
@endpush
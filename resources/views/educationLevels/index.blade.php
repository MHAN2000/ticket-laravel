@extends('base')
@section('title', 'Niveles educativos')
@section('body')
<div class="grid">
    <div class="col-12">
        <table id="educationLevelsTable">
            <thead>
                <th>Nivel</th>
                <th>Fecha creacion</th>
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
@endpush
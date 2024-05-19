@extends('base')
@section('title', 'Registrar Ticket')
@section('body')
<form class="row" id="ticketForm" onsubmit="editTicket();">
    @include('tickets.partials.form')
    <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>
@endsection
@push('scripts')
<script src="{{ asset('js/ticketCreate.js') }}" defer></script>
@endpush
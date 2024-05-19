@extends('base')
@section('title', 'Tickets')
@section('body')
<div class="grid">
    <div class="col-12">
        <h5>Tickets</h5>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" onclick="createTicket()">Agregar</button>
    </div>
    <div class="col-12">
        <table class="table" id="ticketsTable">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>CURP</th>
                    <th>Name</th>
                    <th>Last name</th>
                    <th>Second last name</th>
                    <th>City</th>
                    <th>Education level</th>
                    <th>Email</th>
                    <th>Phone 1</th>
                    <th>Phone 2</th>
                    <th>Status</th>
                    <th>Responsable</th>
                    <th>Subject</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/ticketIndex.js') }}" defer></script>
<script src="{{ asset('js/cityCreateUpdate.js') }}" defer></script>
@endpush
@extends('base')
@section('title', 'Inicia sesion')
@section('body')
<div class="grid">
    <div style="height: 100vh;" class="col-12 d-flex align-items-center justify-content-center">
        <div class="card w-25">
            <form id="ticketForm" class="card-body">
                <input id="curp" class="form-control" name="curp" placeholder="CURP" />
                <input id="folio" name="ticket" class="form-control mt-2" placeholder="Numero del ticket" />
                <button onclick="searchTicket()" class="btn btn-primary mt-2 w-100">Ver ticket</button>
                <a href="{{ route('tickets.create') }}" class="btn btn-primary mt-2 w-100">Registrar ticket</a>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/ticketCreate.js') }}" defer> </script>
@endpush
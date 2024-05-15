@extends('base')
@section('title', 'Inicio')
@section('body')
<div class="grid">
    <div style="height: 2rem;" class="col-12 d-flex justify-content-between">
        <a href="{{ route('users.index') }}">Usuarios</a>
        <a href="{{ route('education-levels.index') }}">Niveles educativos</a>
        <a href="{{ route('cities.index') }}">Municipios</a>
        <button class="btn btn-danger" onclick="logout()">Cerrar sesión</button>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        const logout = async () => {
            // URL to GET
            const url = route('users.logout');
            // Send the request to the backend
            const req = await fetch(url);
            // Check request status
            if (req.ok) {
                window.location.href = route('login');
                return;
            }
            showToast('Error', 'Ha ocurrido un error', 'error');
        }
    </script>
@endpush
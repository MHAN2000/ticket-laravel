@extends('base')
@section('title', 'Inicia sesion')
@section('body')
<div class="grid">
    <div style="height: 100vh;" class="col-12 d-flex align-items-center justify-content-center">
        <div class="card w-25">
            <div class="card-body">
                <h5 class="text-center">Inicia sesion</h5>
                <input class="form-control" placeholder="Usuario" />
                <input class="form-control mt-2" type="password" placeholder="Contraseña" />
                <button class="btn btn-primary mt-2 w-100">Iniciar sesion</button>
            </div>
        </div>
    </div>
</div>
@endsection
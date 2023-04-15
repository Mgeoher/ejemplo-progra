@extends('layout')


@section('title', 'Page Title')

@section('sidebar')
    <p> </p>
@endsection
@section('content')
    <div class="card">
        <h5 class="card-header">Agregar nuevo</h5>
        <div class="card-body">

            <p class="card-text">
                <form action="{{route('Catedratico.store')}}" method="POST">
                @csrf
                <label for="">codigo_proveedor</label>
                <input type="text" name="codigo_proveedor" class="form-control" required>
                <label for="">nombre_proveedor</label>
                <input type="text" name="nombre_proveedor" class="form-control" required>
                <label for="">direccion</label>
                <input type="text" name="direccion" class="form-control" required>
                <label for="">telefono</label>
                <input type="text" name="telefono" class="form-control" required>
                <br>
                <button class="btn btn-primary">Agregar</button>
                <a href="{{ route("Catedratico.index") }}" class="btn btn-info">Regresar</a>
            </form>
            </p>

        </div>
    </div>
@endsection

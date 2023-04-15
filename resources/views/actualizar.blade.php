@extends('layout')


@section('title', 'Page Title')

@section('sidebar')
    <p> </p>
@endsection
@section('content')
    <div class="card">
        <h5 class="card-header">Actualizar</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{route('Catedratico.update', $proveedor->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for=""> codigo_proveedor</label>
                <input type="text" name="codigo_proveedor" class="form-control" required value="{{$proveedor->codigo_proveedor}}">
                <label for=""> nombre_proveedor</label>
                <input type="text" name="nombre_proveedor" class="form-control" required value="{{$proveedor->nombre_proveedor}}">
                <label for=""> direccion</label>
                <input type="text"  name="direccion" class="form-control" required value="{{$proveedor->direcion}}">
                <label for="">telefono</label>
                <input type="text" name="telefono" class="form-control" required value="{{$proveedor->telefono}}">
                <br>
                <button class="btn btn-warning">Actualizar</button>
                <a href="{{ route("Catedratico.index") }}" class="btn btn-info">Regresar</a>
            </form>
            </p>

        </div>
    </div>
@endsection


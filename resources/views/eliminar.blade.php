@extends('layout')


@section('title', 'Page Title')

@section('sidebar')
    <p> </p>
@endsection
@section('content')
    <div class="card">
        <h5 class="card-header">Eliminar</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Esta seguro de eliminar este registro

                <table class="table table-sm table-hover">
                    <thead>
                    <th>Codigo</th>
                    <th>nombre de proveedor</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$proveedor->codigo_proveedor }}</td>
                        <td>{{$proveedor->nombre_proveedor}}</td>
                        <td>{{$proveedor->direccion}}</td>
                        <td>{{$proveedor->telefono}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route("Catedratico.destroy",$proveedor->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger">Eliminar</button>
                    <a href="{{ route("Catedratico.index") }}" class="btn btn-info">Regresar</a>
                </form>
            </div>

            </p>

        </div>
    </div>
@endsection


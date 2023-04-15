@extends('layout')


@section('title', 'Page Title')

@section('sidebar')
    <p> </p>
@endsection

@section('content')
    <div class="card">
        <div class="row">
            <div class="col-sm-12">
                @if($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$mensaje}}
                    </div>
                @endif

            </div>
        </div>
        <h5 class="card-header">Prueba</h5>
        <div class="card-body">
            <h5 class="card-title"> con Larabel</h5>
            <p>
                <a href="{{route('Catedratico.create')}}" class="btn btn-primary">Agregar nuevas personas</a>
            </p>
            <hr>

            <p class="card-text">
                <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                    <th>Codigo</th>
                    <th>nombre de proveedor</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                    <tr>
                        <td>{{$item->codigo_proveedor}}</td>
                        <td>{{$item->nombre_proveedor}}</td>
                        <td>{{$item->direccion}}</td>
                        <td>{{$item->telefono}}</td>
                        <td>
                            <form action="{{route("Catedratico.edit", $item->id) }}" method="GET">
                                <button class="btn btn-warning btn-sm">Editar</button>
                            </form>
                        </td>
                        <td><form action="{{route("Catedratico.show", $item->id) }}" method="GET">
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{$datos->links()}}
                </div>
            </div>

            </p>

        </div>
    </div>
    <div class="row">
        <p> </p>


    </div>
@endsection

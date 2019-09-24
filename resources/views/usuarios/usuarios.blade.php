@extends('usuarios.layaout')

@section('contenido')
<h1>tabla de productos </h1>

<div class="container p4">
    <div class="row">
        <div class="col-md-6 col-6">
            <h1>productos</h1>
            <a href="{{route('usuario.create')}}">crear producto</a>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">nombre</th>
                                <th scope="col">apellido</th>
                                <th scope="col">edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $camilo)

                            <tr>

                                <th scope="row">{{ $camilo->nombre}}</th>
                                <td>{{ $camilo->precio}}</td>
                                <td>{{ $camilo->empresa}}</td>
                                <td>
                                    <a class="btn-btn-danger" href="{{ route('usuario.destroy',$camilo->id)}}">eliminar</a>
                                    <a class="btn-btn-info" href="{{ route('usuario.edit', $camilo->id)}}">modificar</a>
                                </td>

                            </tr>
                            @endforeach

                            {{ $usuarios->links() }}
                        </tbody>

                    </table>



                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@extends('layouts.base')

<div class="Container mt-1">
    @section('title', 'User List')

    @section('content')
        <div  class="row justify-content-center">
            <div class="col-md-10">
                <a href="/">
                    <br>
                    <img src="https://thumbs.dreamstime.com/b/un-mont%C3%B3n-de-libros-libro-abierto-y-l%C3%A1piz-suministros-escolares-objetos-dibujos-animados-vectoriales-aislados-en-fondo-blanco-192812588.jpg" width="100" height="120" class="rounded mx-auto d-block" alt="...">
                    <br>
                </a>
                <h2 class="text-center mb-5">Registro de Prestamos</h2>
                @if(session('usuarioEliminado'))
                    <div class="alert alert-success">
                        {{session('usuarioEliminado')}}
                    </div>
                @endif
                <table class="table table-bordered table-striped text-center  ">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody class="">
                    @foreach($Books as $book)
                        <tr>
                            <td>{{$book->titulo}}</td>
                            <td>{{$book->nombre}}</td>
                            <td>{{$book->email}}</td>
                            <td>{{$book->telefono}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('editform', $book->id)}}">
                                        <i class="fas fa-pencil-alt btn btn-primary mr-5"></i>
                                    </a>

                                    <form action="{{ route('delete', $book->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Desea eliminar el usuario?')" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    @endsection
</div>

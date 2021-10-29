@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Content here -->
    <h2>Lista de usuarios registrados
        <a href="usuarios/create">
            <button type="button" class="btn btn-success float-right">Agregar usuario</button>
        </a>
    </h2>
    <h6>
        @if($search)
        <div class="alert alert-primary" role="alert">
            Los Resultasdos para tu busqueda {{$search}} son:
        </div>
        @endif
    </h6>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Opciones</th>

            </tr>
        </thead>
        <tbody>
            {{-- foreach espara recorrer el cilco de cuantos usuarios se tiene en la base de datos
        $users es la variable que traigo del controlador y recooro con la variable 
        que creo user  --}}
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>


                    <form action="{{ route('usuarios.destroy', $user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('usuarios.show', $user->id)}}">
                            <button type="button" class="btn btn-secondary">Ver</button></a>
                        <a href="{{ route('usuarios.edit', $user->id)}}">
                            <button type="button" class="btn btn-primary">Actualizar
                            </button>
                        </a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="row">
        <div class="mx-auto">
            {{ $users->links() }}
            {{-- PAGINACION CON EL METODO LINKS --}}
        </div>

    </div>
</div>
@endsection

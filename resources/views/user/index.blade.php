@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif


<a href="{{ url('user/create')}}" class="btn btn-info"> Agregar Usuario </a>
</br>
</br>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Rol</th>
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $user->doc}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->adress}}</td>
            <td>{{ $user->role}}</td>
            <td>

            <a class="btn btn-outline-warning" href="{{url('/user/'.$user->id.'/edit')}}"> 
            Editar
            </a>
    
            <form method="post" action="{{ url('/user/'.$user->id) }}" style="display:inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Seguro que desea borrar el registro?');">Borrar</button>

            </form>
            
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

</div>
@endsection
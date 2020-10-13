@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}} 
@endif


<a href="{{ url('client/create')}}" class="btn btn-info"> Agregar Cliente </a>
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
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $client->doc}}</td>
            <td>{{ $client->name}}</td>
            <td>{{ $client->email}}</td>
            <td>{{ $client->adress}}</td>
            <td>

            <a class="btn btn-outline-warning" href="{{url('/client/'.$client->id.'/edit')}}"> 
            Editar
            </a>
    
            <form method="post" action="{{ url('/client/'.$client->id) }}" style="display:inline">
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
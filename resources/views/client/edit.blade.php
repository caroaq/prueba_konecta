@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/client/'.$client->id)}}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH')}}

@include('client.form',['Modo'=>'edit'])
    
</form>

</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/user/'.$user->id)}}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH')}}

@include('user.form',['Modo'=>'edit'])
    
</form>
</div>
@endsection
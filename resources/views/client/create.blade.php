@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/client')}}" method="post">
{{ csrf_field() }}

@include('client.form',['Modo'=>'create'])
   
    
</form>

</div>
@endsection
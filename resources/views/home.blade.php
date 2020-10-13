@extends('layouts.app')

@section('content')
<div class="container">
</br>
</br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <center>
                <div class="card-header">{{ __('Bienvenido') }}</div>
            </center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                    {{ __('¡Has iniciado sesión!') }}
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

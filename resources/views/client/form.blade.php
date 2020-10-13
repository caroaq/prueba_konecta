<div class="card push-top" >
<div class="card-header">
    <center>Agregar cliente</center>
  </div>

    <div class="card-body"> 
    
    <div class="form-group">
        <label for="Documento" class="control-label">{{'Documento'}}</label>
        <input class="form-control {{$errors->has('doc')?'is-invalid':''}} is invalid" type="text" name="doc" id="Documento" 
            value="{{ isset($client->doc)?$client->doc:old('doc')}}"
        >
        {!! $errors->first('doc','<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">

        <label for="Nombre" class="control-label">{{'Nombre'}}</label>
        <input class="form-control {{$errors->has('name')?'is-invalid':''}} is invalid" type="text" name="name" id="Nombre" 
        value="{{ isset($client->name)?$client->name:old('name')}}"
        >
        {!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">

        <label for="Correo" class="control-label">{{'Correo'}}</label>
        <input class="form-control {{$errors->has('email')?'is-invalid':''}} is invalid" type="email" name="email" id="Correo" 
        value="{{ isset($client->email)?$client->email:old('email')}}"
        >
        {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="form-group">
        <label for="Dirección" class="control-label">{{'Dirección'}}</label>
        <input class="form-control {{$errors->has('adress')?'is-invalid':''}} is invalid" type="text" name="adress" id="Direccion" 
        value="{{ isset($client->adress)?$client->adress:old('adress')}}"
        >
        {!! $errors->first('adress','<div class="invalid-feedback">:message</div>') !!}
    </div>

        <center>
        <input class="btn btn-info" type="submit" value="{{ $Modo=='create' ? 'Agregar':'Actualizar'}}">
        <a class="btn btn-info" href="{{ url('client')}}"> Regresar </a>
        </center>
    </div>
</div>   
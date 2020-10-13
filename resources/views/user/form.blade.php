<div class="card push-top" >
<div class="card-header">
    <center>Agregar usuario</center>
  </div>

  <div class="card-body">

        <div class="form-group">   
            <label for="Documento" class="control-label">{{'Documento'}}</label>
            <input class="form-control {{$errors->has('doc')?'is-invalid':''}} is invalid" type="text" name="doc" id="Documento" 
                value="{{ isset($user->doc)?$user->doc:old('doc')}}"
            >
            {!! $errors->first('doc','<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">  
            <label for="Nombre" class="control-label">{{'Nombre'}}</label>
            <input class="form-control {{$errors->has('name')?'is-invalid':''}} is invalid" type="text" name="name" id="Nombre" 
            value="{{ isset($user->name)?$user->name:old('name')}}"
            >
            {!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group"> 
            <label for="Correo" class="control-label">{{'Correo'}}</label>
            <input class="form-control {{$errors->has('email')?'is-invalid':''}} is invalid" type="email" name="email" id="Correo" 
            value="{{ isset($user->email)?$user->email:old('email')}}"
            >
            {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group"> 

            @if($Modo=='create')
            <label for="Contraseña" class="control-label">{{'Contraseña'}}</label>
                <input class="form-control {{$errors->has('password')?'is-invalid':''}} is invalid" type="password" name="password" id="Contrasena">
            @endif
            {!! $errors->first('password','<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group"> 
            <label for="Dirección" class="control-label">{{'Dirección'}}</label>
            <input class="form-control {{$errors->has('adress')?'is-invalid':''}} is invalid" type="text" name="adress" id="Direccion" 
            value="{{ isset($user->adress)?$user->adress:old('adress')}}"
            >
            {!! $errors->first('adress','<div class="invalid-feedback">:message</div>') !!}
        </div>
            

        <div class="form-group"> 
            <label for="Rol" class="control-label">{{'Rol'}}</label>
            <select id="Rol" class="form-control" name="role" 
            value="{{ isset($user->role)?$user->role:''}}"
            >
                <option selected>Vendedor</option>
                <option>Administrador</option>
            </select>
        </div>
            <center> 
            <input class="btn btn-info" type="submit" value="{{ $Modo=='create' ? 'Agregar':'Actualizar'}}">
            <a class="btn btn-info" href="{{ url('user')}}"> Regresar </a>
            </center>   
        </div>
</div>
<div class="card push-top" >
<div class="card-header">
    <center>Agregar cliente</center>
  </div>

    <div class="card-body">
    
    <div class="form-group">
        <label for="Documento" class="control-label">{{'Documento'}}</label>
        <input class="form-control" type="text" name="doc" id="Documento" 
            value="{{ isset($client->doc)?$client->doc:''}}"
        >
    </div>

    <div class="form-group">

        <label for="Nombre" class="control-label">{{'Nombre'}}</label>
        <input class="form-control" type="text" name="name" id="Nombre" 
        value="{{ isset($client->name)?$client->name:''}}"
        >
    </div>

        <div class="form-group">

        <label for="Correo" class="control-label">{{'Correo'}}</label>
        <input class="form-control" type="email" name="email" id="Correo" 
        value="{{ isset($client->email)?$client->email:''}}"
        >
    </div>

        <div class="form-group">
        <label for="Dirección" class="control-label">{{'Dirección'}}</label>
        <input class="form-control" type="text" name="adress" id="Direccion" 
        value="{{ isset($client->adress)?$client->adress:''}}"
        >
    </div>

        <center>
        <input class="btn btn-info" type="submit" value="{{ $Modo=='create' ? 'Agregar':'Actualizar'}}">
        <a class="btn btn-info" href="{{ url('client')}}"> Regresar </a>
        </center>
    </div>
</div>   
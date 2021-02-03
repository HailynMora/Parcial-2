@extends('principal')
@section('contenido')
<h1> Formulario de Actualizacion </h1>
<form action="{{route('actualizarEdit',$editorial->id)}}" method= "POST">
    @csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" id="nombre" name="nombre" value="{{$editorial->nombre}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="direccion">Dirección </label>
        <input type="text" id="direccion" name="direccion" value="{{$editorial->direccion}}" class="form-control" placeholder="Dirección" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="ciudad">Ciudad </label>
        <input type="text" id="ciudad" name="ciudad" value="{{$editorial->ciudad}}" class="form-control" placeholder="Ciudad" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="telefono">Telefono </label>
        <input type="text" id="telefono" name="telefono" value="{{$editorial->telefono}}" class="form-control" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
    <a  href="{{ url()->previous() }}" class="btn btn-danger" > Cancelar</a>
</form>




@stop
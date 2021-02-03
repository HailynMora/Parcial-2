@extends('principal')
@section('contenido')
<h1> Formulario de Actualizacion </h1>

<form action="{{route('actualizaredit, $edit->id )}}" method= "POST">
    @csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" id="nombre" name="nombre" value="{{$edit->nombre}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="direccion">Dirección </label>
        <input type="text" id="direccion" name="direccion" value="{{$edit->direccion}}" class="form-control" placeholder="Dirección" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="ciudad">Ciudad </label>
        <input type="text" id="ciudad" name="ciudad" value="{{$edit->ciudad}}" class="form-control" placeholder="Ciudad" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="telefono">Telefono </label>
        <input type="text" id="telefono" name="telefono" value="{{$edit->telefono}}" class="form-control" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>

    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</form>




@stop
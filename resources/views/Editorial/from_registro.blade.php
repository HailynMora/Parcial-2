@extends('principal')
@section('contenido')
    <h1> Formulario de Registro </h1>

    <form action="{{route('registrar')}}" method= "POST">
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="nombre">Nombre </label>
            <input type="text" id="nombre" name="nombre"  class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección </label>
            <input type="text" id="direccion" name="direccion"  class="form-control" placeholder="Direccioón" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad </label>
            <input type="text" id="ciudad" name="ciudad"  class="form-control" placeholder="Ciudad" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono </label>
            <input type="text" id="telefono" name="telefono"  class="form-control" placeholder="Telefono" aria-label="Recipient's username" aria-describedby="basic-addon2"required>
        </div>


        <br> <br>
         <!-- Etiquetas de tipo button -->
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
        <a  href="{{ url()->previous() }}" class="btn btn-danger" > Cancelar</a>
    </form>

@stop
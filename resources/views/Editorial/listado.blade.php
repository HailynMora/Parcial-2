@extends('principal')
@section('contenido')
    <h1> Editoriales </h1>
<table class="table">
<a href="{{route('fromregistrar')}}" class="btn btn-primary" > Registrar</a>

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Telefono</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $edt)
      
            <tr>
            <td> {{ $edt->id }} </td>
            <td> {{ $edt->nombre}} </td>
            <td> {{ $edt->direccion }}</td>
            <td> {{ $edt->ciudad }}</td>
            <td> {{ $edt->telefono }}</td>
            <td>
            <a href="{{route('from',$edt->id)}}" class="btn btn-primary" > Actualizar</a>
            </td>
            </tr>
        
    @endforeach
    </tbody>
</table

@stop
@extends('principal')
@section('contenido')
    <h1 style="text-align: center;"> Listado Libros </h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ISBN</th>
            <th scope="col">Titulo </th>
            <th scope="col">Stock </th>
            <th scope="col">Estado </th>
            <th scope="col">Editorial </th>
            <th scope="col">Precio </th>
            <th scope="col">Descuento </th>
        </tr>
    </thead>
    <tbody>
    @foreach($libros as $lib)
      
            <tr>
            <td> {{ $lib->id }} </td>
            <td> {{ $lib->ISBN}} </td>
            <td> {{ $lib->titulo }}</td>
            <td> {{ $lib->stok }}</td>
            <td> 
                @if($lib->stok == 0)  
                    Agotado
                @endif  
                @if($lib->stok >= 1 && $lib->stok <= 10)  
                    Ultimas Unidades
                @endif  
                @if($lib->stok > 10)  
                    Disponible
                @endif

            </td>
            <td> {{ $lib->nombre }}</td>
            <td> {{ $lib->precio }}</td>
            <td> 
                @if($lib->nombre =='Norma' || $lib->nombre =='La Santillana')
                    {{$lib->precio - $lib->precio  * 0.05 }} 
                @endif
                @if($lib->nombre !='Norma' && $lib->nombre !='La Santillana')
                    0 
                @endif
            </td>
            </tr>
        
    @endforeach
        
    </tbody>
</table

@stop
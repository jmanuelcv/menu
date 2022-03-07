@extends('plantilla')


@section('contenido')
{{-- Enlace para cargar nuevos platos --}}
<a class="nav-link" href="{{ route('crear')}}">Agregar</a>
{{-- Lista de platos --}}
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Categoria</th>
        <th >Precio</th>
        <th colspan="2" >Acciones</th>
    </tr>
    @foreach ($restaurante as $item )
    <tr>
      
        <td>{{ $item->id }}</td>
        <td><img src="{{ $item->ruta }}" alt="" width="100"></td>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->categoria }}</td>
        <td>{{ $item->precio }}</td>
        <td >
 {{-- Enlace para editar o eliminar  platos --}}
    <a  class="btn btn-danger btn-sm rounded-0"  href="{{ route("eliminar",$item->id) }}">Eliminar</a> 
   <a  class="btn btn-info  btn-sm rounded-0"  href="{{ route("editar",$item->id) }}">Editar</a> </td>
</td>
    </tr>
    @endforeach
</table>  
@endsection
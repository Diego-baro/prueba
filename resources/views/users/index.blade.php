@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
<a href="{{ route('user.create') }}" class="btn btn-info active border-actions" role="button" aria-pressed="true">Nuevo Usuario</a>
<div class="container">
   <h2>Tabla de Usuarios</h2>
   <p>Usuarios del Día</p>
   <table class="table table-hover">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Tipo</th>
            <th scope="col">Marca</th>
            <th scope="col">Placa</th>
            <th scope="col">Fecha</th>
            <th scope="col">Editar</th>
         </tr>
          @foreach($parking as $parkings)
        <tr>
            <td>{{$parkings->id}}</td>
            <td>{{$parkings->iduser}}</td>
            <td>{{$parkings->uname}}</td>
            <td>{{$parkings->ulname}}</td>
            <td>{{$parkings->vtype}}</td>
            <td>{{$parkings->vbrand}}</td>
            <td>{{$parkings->vplate}}</td>
            <td>{{$parkings->vdate}}</td>
            <td >
                <a href="/user/{{$parkings->slug}}" class="btn btn-success active border-actions" role="button" aria-pressed="true">Vista previa</a>
            </td>
        </tr>
        @endforeach
      </thead>
   </table>
</div>
@endsection
@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
<a href="{{ route('rate.create') }}" class="btn btn-info active border-actions" role="button" aria-pressed="true">Nueva Tarifa</a>
<div class="container">
   <h2>Tabla de Tarifas</h2>
   <table class="table table-hover">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Tarifa</th>
            <th scope="col">Editar</th>
         </tr>
      </thead>
      <tbody>
        @foreach($rate as $rates)
        <tr>
            <td>{{$rates->id}}</td>
            <td>{{$rates->vtype}}</td>
            <td>{{$rates->vbrand}}</td>
              <td >
                <a href="/rate/{{$rates->slug}}" class="btn btn-success active border-actions" role="button" aria-pressed="true">Vista previa</a>
            </td>
        </tr>
        @endforeach
      </tbody>
   </table>
</div>
@endsection
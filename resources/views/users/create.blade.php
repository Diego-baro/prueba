@extends('layouts.app')
@section('title', 'Crear Categoria')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 divleft">
         <div class="panel-group">
            <div class="panel panel-primary">
               <div class="panel-heading">Formulario Nuevo Usuarios</div>
               <div class="panel-body">
                  <form class="form-group" method="POST" action="{{url('/user')}}">
            {{ csrf_field() }}
                     <p>Información del Usuario</p>
                     <div class="title"></div>
                     <div class="form-group">
                        <label for="iduser">Documento:</label>
                        <input type="text" class="form-control" id="iduser" name="iduser">
                     </div>
                     <div class="form-group">
                        <label for="uname">Nombre:</label>
                        <input type="text" class="form-control" id="uname" name="uname">
                     </div>
                     <div class="form-group">
                        <label for="ulname">Apellido:</label>
                        <input type="text" class="form-control" id="ulname" name="ulname">
                     </div>
                     <p>Información del Vehiculo</p>
                     <div class="title"></div>
                     <div class="form-group">
                        <label for="vtype">Tipo de Vehiculo</label>
                        <select class="form-control" id="vtype" name="vtype">
                           <option value="2">Carro</option>
                           <option value="3">Moto</option>
                           <option value="4">Bicicleta</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="vbrand">Marca:</label>
                        <input type="text" class="form-control" id="vbrand" name="vbrand">
                     </div>
                     <div class="form-group">
                        <label for="vplate">Placa:</label>
                        <input type="text" class="form-control" id="vplate" name="vplate">
                     </div>
                     <div class="form-group">
                        <label for="vdate">Fecha:</label>
                        <input type="text" class="form-control" id="vdate" name="vdate">
                     </div>
                     <button type="submit" class="btn btn-default">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-3"></div>
   </div>
   <a href="{{ route('user.index') }}" class="btn btn-info active border-actions divleft" role="button" aria-pressed="true">Regresar</a>
</div>
@endsection
@extends('layouts.app')
@section('title', 'Crear Categoria')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 divleft">
         <div class="panel-group">
            <div class="panel panel-primary">
               <div class="panel-heading">Usuario</div>
               <div class="panel-body">
                  <form class="form-group" method="POST" action="{{url('/user')}}">
                     {{ csrf_field() }}
                     <div class="title"></div>
                     <div class="form-group">
                        <label for="iduser">Documento:</label>
                        <input type="text" class="form-control" id="iduser" name="iduser" value="{{$user->iduser}}" disabled="disabled">
                     </div>
                     <div class="form-group">
                        <label for="uname">Nombre:</label>
                        <input type="text" class="form-control" id="uname" name="uname" value="{{$user->uname}}" disabled="disabled">
                     </div>
                     <div class="form-group">
                        <label for="ulname">Apellido:</label>
                        <input type="text" class="form-control" id="ulname" name="ulname" value="{{$user->ulname}}" disabled="disabled">
                     </div>
                     <p>Información del Vehiculo</p>
                     <div class="title"></div>
                     <div class="form-group">
                        <label for="vtype">Tipo de Vehiculo</label>
                        <select class="form-control" id="vtype" name="vtype">
                           <option value="">{{$user->vtype}}</option>
                           <option value="Carro">Carro</option>
                           <option value="Moto">Moto</option>
                           <option value="Bicicleta">Bicicleta</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="vbrand">Marca:</label>
                        <input type="text" class="form-control" id="vbrand" name="vbrand" value="{{$user->vbrand}}" disabled="disabled">
                     </div>
                     <div class="form-group">
                        <label for="vplate">Placa:</label>
                        <input type="text" class="form-control" id="vplate" name="vplate" value="{{$user->vplate}}" disabled="disabled">
                     </div>
                     <div class="form-group">
                        <label for="vdate">Fecha:</label>
                        <input type="text" class="form-control" id="vdate" name="vdate" value="{{$user->vdate}}" disabled="disabled">
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
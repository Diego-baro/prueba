@extends('layouts.app')
@section('title', 'Crear Categoria')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 divleft">
         <div class="panel-group">
            <div class="panel panel-primary">
               <div class="panel-heading">Formulario Tarifa</div>
               <div class="panel-body">
                   <form class="form-group" method="POST" action="{{url('/report/reportea')}}">
                     <p>Crear Tarifa</p>
                     <div class="title"></div>
                     <div class="form-group">
                        <label for="vtype">Example select</label>
                        <select class="form-control" id="vtype" name="vtype">
                           <option>Carro</option>
                           <option>Moto</option>
                           <option>Bicicleta</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="vbrand">Tarifa/Minuto:</label>
                        <input type="text" class="form-control" id="vbrand" name="vbrand">
                     </div>
                     <button type="submit" class="btn btn-default">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-3"></div>
   </div>
   <a href="{{ route('rate.index') }}" class="btn btn-info active border-actions divleft" role="button" aria-pressed="true">Regresar</a>
</div>
@endsection
@extends('layouts.app')
@section('title', 'Crear Categoria')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 divleft">
         <div class="panel-group">
            <div class="panel panel-info">
               <div class="panel-heading">Tarifa</div>
               <div class="panel-body">
                   <form class="form-group" method="POST" action="{{url('/rate')}}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label for="vtype">Example select</label>
                        <select required class="form-control" id="vtype" name="vtype" placeholderdisabled="disabled">
                           <option value="">{{$rate->vtype}}</option>
                           <option value="carro">Carro</option>
                           <option value="moto">Moto</option>
                           <option value="bicicleta">Bicicleta</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="vbrand">Tarifa/Minuto:</label>
                        <input type="text" class="form-control" id="vbrand" name="vbrand" value="{{$rate->vbrand}}" disabled="disabled">
                     </div>
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
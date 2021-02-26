@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
<div class="container-fluid bg-3 text-center">
   <h3 class="margin">Reportes Parking Test</h3>
   <br>
   <div class="container">
      <div class="row">
         <div class="container">
            <div class="row">
               <div class='col-sm-6'>
                  <div class="form-group">
                     <div class='input-group date' id='datei'>
                        <input type='text' class="form-control" name="datea" id="datea" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>
                  </div>
               </div>
               <script type="text/javascript">
                  $(function () {
                      $('#datei').datetimepicker();
                  });
               </script>
               <div class='col-sm-6'>
                  <div class="form-group">
                     <div class='input-group date' id='dates'>
                        <input type='text' class="form-control" name="dateb" id='dateb'/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                     </div>
                  </div>
               </div>
               <script type="text/javascript">
                  $(function () {
                      $('#dates').datetimepicker();
                  });
               </script>
            </div>
         </div>
      </div>
      <?php 
      $Fechai = 0;
      $Fechaf = 0;

       ?>
      <div class="row">
         <div class="col-sm-3">
            <p id="">Parqueadero más usado</p>
            <a href="{{url('reportea',['idguest' => $Fechai, 'idbook' =>$Fechaf])}}">Descargar</a>
         </div>
         <div class="col-sm-3">
            <p>Transacciones de entrada y salida de cada vehículo</p>
            <a href="{{url('reporteb',['idguest' => $Fechai, 'idbook' =>$Fechaf])}}">Descargar</a>
         </div>
         <div class="col-sm-3">
            <p>Cantidad de vehículos por tipos que han ingresado</p>
            <a href="{{url('reportec',['idguest' => $Fechai, 'idbook' =>$Fechaf])}}">Descargar</a>
         </div>
         <div class="col-sm-3">
            <p>Monto obtenido por día</p>
            <a href="{{url('reported',['idguest' => $Fechai, 'idbook' =>$Fechaf])}}">Descargar</a>
         </div>
      </div>
   </div>
</div>
@endsection